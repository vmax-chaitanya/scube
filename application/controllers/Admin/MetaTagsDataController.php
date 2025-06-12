<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MetaTagsDataController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin/MetaTagsDataModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['meta_tags'] = $this->MetaTagsDataModel->get_all_meta_tags();
        $this->load->view('admin/meta_tags_list', $data);
    }
    public function create()
    {
        $this->load->view('admin/meta_tags_create');
    }

    public function store() {
        // echo "hi"; exit;
        // print_r($this->input->post()); exit;
        $this->form_validation->set_rules('page_name', 'Page Name', 'required');
        $this->form_validation->set_rules('meta_name', 'Meta Name', 'required');
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'required');
        $this->form_validation->set_rules('meta_keywords', 'Meta Keywords', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/meta_tags_create');
        } else {
            $data = array(
                'page_name' => $this->input->post('page_name'),
                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                'created_at' => date('Y-m-d H:i:s')
            );
            $insert = $this->MetaTagsDataModel->insert_meta_tag($data);
            if ($insert) {
                $this->session->set_flashdata('success', 'Successfully created');
                redirect('admin/meta_tags_data');
            } else {
                $this->session->set_flashdata('error', 'Failed to insert data.');
                redirect('admin/meta_tags_create');
            }
        }
    }

    public function edit($id) {
        $data['meta_tag'] = $this->MetaTagsDataModel->get_meta_tag($id);
        // echo "<pre>"; print_r($data['meta_tag']); exit;
        $this->load->view('admin/meta_tags_edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('page_name', 'Page Name', 'required');
        $this->form_validation->set_rules('meta_name', 'Meta Name', 'required');
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'required');
        $this->form_validation->set_rules('meta_keywords', 'Meta Keywords', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/meta_tags_edit');
        } else {
            $data = array(
                'page_name' => $this->input->post('page_name'),
                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                'created_at' => date('Y-m-d H:i:s')
            );
            $update = $this->MetaTagsDataModel->update_meta_tag($id, $data);
            if ($update) {
                $this->session->set_flashdata('success', 'Successfully Updated');

                redirect('admin/meta_tags_data');
            } else {
                $this->session->set_flashdata('error', 'Failed to update data.');
                redirect('admin/meta_tags_edit/' . $id);
            }
        }
    }

    public function delete($id) {
        $delete = $this->MetaTagsDataModel->delete_meta_tag($id);
        if ($delete) {
            $this->session->set_flashdata('success', 'Data deleted successfully');

            redirect('admin/meta_tags_data');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete data.');
            redirect('admin/meta_tags_data');
        }
    }

}
