<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JobApplications extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login');
        }
        $this->load->model('Admin/JobApplications_model');
        // $this->load->model('Admin/JobsModel');
        $this->load->model('Admin/jobsModel');
    }

    public function index($status_id = 1, $job_id = null)
    {

        $data['jobs'] = $this->jobsModel->get_all_jobs();
        // print_r($data['jobs']);
        // exit;
        $data['status'] = $status_id;
        $data['selected_job_id'] = $job_id;

        if (!empty($job_id) && $job_id != 0) {
            $data['applications'] = $this->JobApplications_model->get_by_status_and_job($status_id, $job_id);
        } else {
            $data['applications'] = $this->JobApplications_model->get_applications_by_status($status_id);
        }


        $this->load->view('admin/applications_list', $data);
    }

    public function view($id)
    {
        $data['application'] = $this->JobApplications_model->get_application_by_id($id);
        // if (!$data['application']) {
        //     show_404();
        // }
        $this->load->view('admin/application_view', $data);
    }

    public function update_status($id, $new_status)
    {
        $allowed_statuses = [1, 2, 3, 4]; // pending, review, selected, rejected
        if (!in_array($new_status, $allowed_statuses)) {
            show_error('Invalid status update');
        }

        $this->JobApplications_model->update_application_status($id, $new_status);
        $this->session->set_flashdata('success', 'Application status updated successfully.');
        redirect('admin/jobapplications/' . $new_status);
    }
}
