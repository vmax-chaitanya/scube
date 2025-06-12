<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaticPagesSeo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the necessary model
        $this->load->model('Admin/StaticPagesSeoModel');
    }

    public function index()
    {
        // Retrieve a list of static page SEO records and load a view to display them
        $data['seo_records'] = $this->StaticPagesSeoModel->getSeoRecords();
        $this->load->view('admin/seo_list', $data);
    }
    public function add()
    {
        // Retrieve a list of static page SEO records and load a view to display them
        $data['seo_records'] = $this->StaticPagesSeoModel->getSeoRecords();
        $this->load->view('admin/seo_create', $data);
    }

    public function create()
    {
        // Handle the creation of a new SEO record
        if ($_POST) {
            $data = array(
                'page_id' => $this->input->post('page_id'),
                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                'status' => $this->input->post('status'),
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $this->session->userdata('user_id') // Adjust this according to your user system
            );

            // Insert the new SEO record
            $this->StaticPagesSeoModel->createSeoRecord($data);

            // Redirect to the list page or wherever you prefer
            redirect('admin/static_pages_seo');
        }

        // Load the view for creating a new SEO record
        // $this->load->view('static_pages_seo/create');
    }

    public function edit($id)
    {
        // Handle editing an existing SEO record
        if ($_POST) {
            // Handle the form submission for updating the record
            $data = array(
                'page_id' => $this->input->post('page_id'),
                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                'status' => $this->input->post('status'),
                // Add any other fields you want to update here
            );

            // Update the SEO record
            $this->StaticPagesSeoModel->updateSeoRecord($id, $data);

            // Redirect to the list page or wherever you prefer
            redirect('static_pages_seo/index');
        }

        // Load the existing SEO record data for editing
        $data['seo_record'] = $this->StaticPagesSeoModel->getSeoRecordById($id);
        $this->load->view('admin/seo_edit', $data);
    }
    public function update($id)
    {
        // Handle editing an existing SEO record
        if ($_POST) {
            // Handle the form submission for updating the record
            $data = array(
                'page_id' => $this->input->post('page_id'),
                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                'status' => $this->input->post('status'),
                // Add any other fields you want to update here
            );

            // Update the SEO record
            $this->StaticPagesSeoModel->updateSeoRecord($id, $data);

            // Redirect to the list page or wherever you prefer
            redirect('admin/static_pages_seo');

        }

        // Load the existing SEO record data for editing
        // $data['seo_record'] = $this->StaticPagesSeoModel->getSeoRecordById($id);
        // $this->load->view('admin/seo_edit', $data);
    }

    public function delete($id)
    {
        // Handle the deletion of an SEO record
        $this->StaticPagesSeoModel->deleteSeoRecord($id);

        // Redirect to the list page or wherever you prefer
        redirect('static_pages_seo/index');
    }
}
