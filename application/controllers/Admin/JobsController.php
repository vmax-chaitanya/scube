<?php
class JobsController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login');
        }
        $this->load->model('Admin/jobsModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['jobs'] = $this->jobsModel->get_all_jobs();
        $this->load->view('Admin/jobsListing', $data);
    }

    public function create()
    {
        $this->load->view('admin/jobsCreate');
    }

    public function store()
    {
        $this->form_validation->set_rules('job_title', 'Job Title', 'required|max_length[255]');
        $this->form_validation->set_rules('job_type', 'Job Type', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/jobsCreate');
        } else {
            $image_name = null;

            if (!empty($_FILES['image']['name'])) {
                $config['upload_path']   = './assets/images/jobs/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size']      = 2048;
                $config['encrypt_name']  = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $image_name = 'assets/images/jobs/' . $upload_data['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    return redirect(current_url());
                }
            }

            $data = $this->_get_post_data();
            $data['image'] = $image_name; // Add image path
            $this->jobsModel->create_job($data);

            $this->session->set_flashdata('success', 'Job created successfully.');
            redirect('admin/jobs');
        }
    }


    public function edit($id)
    {
        $data['job'] = $this->jobsModel->get_job($id);
        if (!$data['job']) show_404();
        $this->load->view('admin/jobsEdit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('job_title', 'Job Title', 'required|max_length[255]');
        $this->form_validation->set_rules('job_type', 'Job Type', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $image_name = $this->input->post('old_image'); // Default to old image

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path']   = './assets/images/jobs/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;
            $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $upload_data = $this->upload->data();
                $image_name = 'assets/images/jobs/' . $upload_data['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                return redirect(current_url());
            }
        }

        if ($this->form_validation->run() === FALSE) {
            $data['job'] = $this->jobsModel->get_job($id);
            $this->load->view('admin/jobsEdit', $data);
        } else {
            $data = $this->_get_post_data($id);
            $data['image'] = $image_name; // Add image path
            $this->jobsModel->update_job($id, $data);

            $this->session->set_flashdata('success', 'Job updated successfully.');
            redirect('admin/jobs');
        }
    }



    public function delete($id)
    {
        $this->jobsModel->delete_job($id);
        $this->session->set_flashdata('success', 'Job deleted successfully.');
        redirect('admin/jobs');
    }

    private function _get_post_data($id = null)
    {
        $job_title = $this->input->post('job_title');
        $slug = url_title($job_title, 'dash', true); // create slug from title

        // Check for uniqueness only when creating a new job
        if (!$id || !$this->jobsModel->is_slug_unique($slug, $id)) {
            $slug .= '-' . time(); // make it unique by appending timestamp
        }

        return [
            'job_title'            => $job_title,
            'slug'                 => $slug,
            'company_name'         => $this->input->post('company_name'),
            'location'             => $this->input->post('location'),
            'job_type'             => $this->input->post('job_type'),
            'department'           => $this->input->post('department'),
            'experience_required'  => $this->input->post('experience_required'),
            'salary_min'           => $this->input->post('salary_min'),
            'salary_max'           => $this->input->post('salary_max'),
            'application_deadline' => $this->input->post('application_deadline'),
            'status'               => $this->input->post('status'),
            'description'          => $this->input->post('description'),
            'created_at'           => date('Y-m-d H:i:s'),
            'updated_at'           => date('Y-m-d H:i:s')
        ];
    }
}
