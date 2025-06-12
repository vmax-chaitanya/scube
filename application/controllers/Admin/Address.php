<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/address_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['addresses'] = $this->address_model->get_all_addresses();
        $this->load->view('admin/address_list', $data);
    }

    public function add()
    {
        $this->load->view('admin/address_create');
    }

    public function create()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[200]');
        $this->form_validation->set_rules('contact_1', 'Contact 1', 'required|max_length[11]');
        $this->form_validation->set_rules('contact_2', 'Contact 2', 'required|max_length[11]');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required|max_length[100]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/address_create');
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'contact_1' => $this->input->post('contact_1'),
                'contact_2' => $this->input->post('contact_2'),
                'company_name' => $this->input->post('company_name'),
                'address' => $this->input->post('address'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s")
            );

            $result = $this->address_model->create_address($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Address created successfully.');
                redirect('admin/address');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/address');
            }
        }
    }

    public function edit($id)
    {
        $data['address'] = $this->address_model->get_address_by_id($id);
        $this->load->view('admin/address_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[200]');
        $this->form_validation->set_rules('contact_1', 'Contact 1', 'required|max_length[11]');
        $this->form_validation->set_rules('contact_2', 'Contact 2', 'required|max_length[11]');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required|max_length[100]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/address_edit');
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'contact_1' => $this->input->post('contact_1'),
                'contact_2' => $this->input->post('contact_2'),
                'company_name' => $this->input->post('company_name'),
                'address' => $this->input->post('address'),
                'status' => $this->input->post('status'),
                'created_at' => time()
            );

            $result = $this->address_model->update_address($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Address updated successfully.');
                redirect('admin/address');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/address/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->address_model->delete_address($id);
        redirect('admin/address');
    }
}
