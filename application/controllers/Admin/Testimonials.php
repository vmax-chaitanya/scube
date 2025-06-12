<?php
class Testimonials extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/testimonials_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['testimonials'] = $this->testimonials_model->get_all_testimonials();
        $this->load->view('admin/testimonials_list', $data);
    }

    public function add()
    {
        $this->load->view('admin/testimonials_create');
    }

    public function create()
    {
        $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2]');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[300]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required|in_list[1,2]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/testimonials_create');
        } else {
            $data = array(
                'type' => $this->input->post('type'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'gender' => $this->input->post('gender'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace with the actual user ID who created the testimonial
            );

            $result = $this->testimonials_model->create_testimonial($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Testimonial created successfully.');
                redirect('admin/testimonials');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/testimonials');
            }
        }
    }

    public function edit($id)
    {
        $data['testimonial'] = $this->testimonials_model->get_testimonial_by_id($id);
        $this->load->view('admin/testimonials_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2]');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[300]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required|in_list[1,2]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $data['testimonial'] = $this->testimonials_model->get_testimonial_by_id($id);
            $this->load->view('admin/testimonials_edit', $data);
        } else {
            $data = array(
                'type' => $this->input->post('type'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'gender' => $this->input->post('gender'),
                'status' => $this->input->post('status'),
                'created_at' => time(),
                'created_by' => $this->input->post('created_by') // Replace with the actual user ID who updated the testimonial
            );

            $result = $this->testimonials_model->update_testimonial($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Testimonial updated successfully.');
                redirect('admin/testimonials');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/testimonials');
            }
        }
    }

    public function delete($id)
    {
        $this->testimonials_model->delete_testimonial($id);
        redirect('admin/testimonials');
    }
}
?>
