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
    }

    public function index($status_id = 1) // default pending
    {
        $data['applications'] = $this->JobApplications_model->get_applications_by_status($status_id);
        $data['status'] = $status_id;

        // print_r($data['applications']);
        // exit;
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
