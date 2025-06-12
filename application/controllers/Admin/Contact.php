<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/contact_model'); // Load the Contact_model
        $this->load->library('form_validation');
    }

    public function index($status)
    {
        $data['contacts'] = $this->contact_model->get_all_contacts($status);
        $this->load->view('admin/contact_list', $data); // Load the view for contact list
    }

    public function add()
    {
        $this->load->view('admin/contact_create'); // Load the view for creating contact
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[200]|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|max_length[11]');
        $this->form_validation->set_rules('message', 'Message', 'max_length[500]');
        $this->form_validation->set_rules('services_ids', 'Services IDs', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/contact_create');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message'),
                'services_ids' => $this->input->post('services_ids'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s")
            );

            $result = $this->contact_model->create_contact($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Contact created successfully.');
                redirect('admin/contact');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/contact');
            }
        }
    }

    public function edit($id)
    {
        $data['contact'] = $this->contact_model->get_contact_by_id($id);
        $this->load->view('admin/contact_edit', $data); // Load the view for editing contact
    }
    public function view($id)
    {
        $data['contact'] = $this->contact_model->get_contact_by_id($id);
        $this->load->view('admin/contact_view', $data); // Load the view for editing contact
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[200]|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|max_length[11]');
        $this->form_validation->set_rules('message', 'Message', 'max_length[500]');
        $this->form_validation->set_rules('services_ids', 'Services IDs', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/contact_edit');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message'),
                'services_ids' => $this->input->post('services_ids'),
                'status' => $this->input->post('status'),
                'created_at' => time()
            );

            $result = $this->contact_model->update_contact($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Contact updated successfully.');
                redirect('admin/contact');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/contact/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->contact_model->delete_contact($id);
        redirect('admin/contact');
    }
    public function updateStatus()
    {
        $id = $this->input->post('id');
        $newStatus = $this->input->post('status');

        // Call the model function to update the status
        $result = $this->contact_model->updateStatus($id, $newStatus);

        // Check the result and send a response
        if ($result) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to update status'));
        }
    }
}
