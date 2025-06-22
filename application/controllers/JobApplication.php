<?php
class JobApplication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JobApplication_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function apply()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[100]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|max_length[20]');
        $this->form_validation->set_rules('location', 'Current Location', 'required');
        $this->form_validation->set_rules('work_location', 'Work Location', 'required|integer');
        $this->form_validation->set_rules('job_type', 'Job Type', 'required');
        $this->form_validation->set_rules('authorized', 'Authorization', 'required|in_list[0,1]');
        $this->form_validation->set_rules('right_to_work', 'Right to Work', 'required|in_list[0,1]');
        $this->form_validation->set_rules('sponsorship', 'Sponsorship Need', 'required|in_list[0,1]');
        $this->form_validation->set_rules('visa_category', 'Visa Category', 'required');
        $this->form_validation->set_rules('visa_expiry', 'Visa Expiry Date', 'required');
        $this->form_validation->set_rules('hear_about_us', 'Referral Source', 'in_list[friends,website,social_media,others]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('job_application_form');
        } else {
            // Handle file upload
            $cv_path = '';
            if (!empty($_FILES['cv']['name'])) {
                $config['upload_path'] = './uploads/cv/';
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('cv')) {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect(current_url());
                } else {
                    $data_upload = $this->upload->data();
                    $cv_path = 'uploads/cv/' . $data_upload['file_name'];
                }
            }

            $data = [
                'first_name'        => $this->input->post('first_name'),
                'last_name'         => $this->input->post('last_name'),
                'email'             => $this->input->post('email'),
                'phone'             => $this->input->post('phone'),
                'location'          => $this->input->post('location'),
                'work_location'     => $this->input->post('work_location'),
                'cv'                => $cv_path,
                'authorized'        => $this->input->post('authorized'),
                'right_to_work'     => $this->input->post('right_to_work'),
                'sponsorship'       => $this->input->post('sponsorship'),
                'visa_category'     => $this->input->post('visa_category'),
                'visa_expiry'       => $this->input->post('visa_expiry'),
                'job_type'          => $this->input->post('job_type'),
                'salary'            => $this->input->post('salary'),
                'rate'              => $this->input->post('rate'),
                'hear_about_us'     => $this->input->post('hear_about_us'),
                'status'            => 1, // default to pending
                'created_at'        => date('Y-m-d H:i:s')
            ];

            $this->JobApplication_model->create_application($data);
            $this->session->set_flashdata('success', 'Application submitted successfully.');
            redirect('job-application/success');
        }
    }

    public function success()
    {
        $this->load->view('application_success');
    }
}
