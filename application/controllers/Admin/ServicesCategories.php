<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesCategories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/ServicesCategoriesModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['services_categories'] = $this->ServicesCategoriesModel->getServicesCategories();
        $this->load->view('services_categories_list', $data);
    }

    public function create()
    {
        $this->load->view('services_categories_create');
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[300]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('services_categories_create');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'status' => $this->input->post('status')
            );

            $result = $this->ServicesCategoriesModel->createServicesCategory($data);

            if ($result) {
                $this->session->set_flashdata('success', 'Services category created successfully.');
                redirect('servicescategories');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('servicescategories');
            }
        }
    }

    public function edit($id)
    {
        $data['services_category'] = $this->ServicesCategoriesModel->getServicesCategoryById($id);
        $this->load->view('services_categories_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[300]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('services_categories_edit');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'status' => $this->input->post('status')
            );

            $result = $this->ServicesCategoriesModel->updateServicesCategory($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Services category updated successfully.');
                redirect('servicescategories');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('servicescategories/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->ServicesCategoriesModel->deleteServicesCategory($id);
        redirect('servicescategories');
    }
}
