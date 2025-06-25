<?php
class JobApplication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JobApplication_model');
        $this->load->library('form_validation');
        $this->load->model('Home_model');

        $this->load->helper(array('form', 'url'));
    }

    public function apply($slug = null)
    {

        // echo "test";
        // exit;
        // $this->load->model('Job_model'); // Replace with your actual model name if different

        // Fetch job details using slug
        // $job = $this->Job_model->get_job_by_slug($slug);
        $job = $this->Home_model->get_job_by_slug($slug);

        // if (!$job) {
        //     show_404();
        // }

        // Validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[100]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|max_length[20]');
        $this->form_validation->set_rules('current_location', 'Current Location', 'required');
        $this->form_validation->set_rules('work_location_id', 'Work Location', 'required|integer');
        $this->form_validation->set_rules('job_type', 'Job Type', 'required');
        $this->form_validation->set_rules('authorized', 'Authorization', 'required|in_list[0,1]');
        $this->form_validation->set_rules('right_to_work', 'Right to Work', 'required|in_list[0,1]');
        $this->form_validation->set_rules('sponsorship', 'Sponsorship Need', 'required|in_list[0,1]');
        $this->form_validation->set_rules('visa_category', 'Visa Category', 'required');
        $this->form_validation->set_rules('visa_expiry', 'Visa Expiry Date', 'required');
        $this->form_validation->set_rules('hear_about_us', 'Referral Source', 'in_list[friends,website,social_media,others]');

        if ($this->form_validation->run() == FALSE) {
            $data['job'] = $job;
            // $this->load->view('job_detail_page', $data); // replace with your actual view
            $this->load->view('home/detail', $data);
        } else {
            // Handle file upload
            $cv_path = '';
            if (!empty($_FILES['resume']['name'])) {
                $config['upload_path'] = './assets/uploads/cv/';
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('resume')) {

                    echo "hiiii";
                    exit;
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect(current_url());
                } else {
                    $data_upload = $this->upload->data();
                    $cv_path = '/assets/uploads/cv/' . $data_upload['file_name'];
                }
            }

            $form_data = [
                'first_name'        => $this->input->post('first_name'),
                'last_name'         => $this->input->post('last_name'),
                'email'             => $this->input->post('email'),
                'phone'             => $this->input->post('phone'),
                'current_location'          => $this->input->post('current_location'),
                'work_location_id'     => $this->input->post('work_location_id'),
                'resume'                => $cv_path,
                'authorized_work'        => $this->input->post('authorized'),
                'right_to_work'     => $this->input->post('right_to_work'),
                'need_sponsorship'       => $this->input->post('sponsorship'),
                'visa_category'     => $this->input->post('visa_category'),
                'visa_expiry'       => $this->input->post('visa_expiry'),
                'job_type'          => $this->input->post('job_type'),
                'salary'            => $this->input->post('salary'),
                'rate'              => $this->input->post('rate'),
                'source'     => $this->input->post('hear_about_us'),
                'ir35_type'     => $this->input->post('ir35_type'),
                'status'            => 1,
                'created_at'        => date('Y-m-d H:i:s'),
                'job_id'            => $job->id // assuming you store job_id with applications
            ];

            $this->JobApplication_model->create_application($form_data);
            $this->session->set_flashdata('success', 'Application submitted successfully.');
            redirect('job-application/success');
            // $this->load->view('home/success');
        }
    }


    public function success()
    {
        $this->load->view('home/success');
    }
}
