<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Training extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/training_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['trainings'] = $this->training_model->get_all_trainings();
        //   print_r($data['trainings']); exit;
        $this->load->view('admin/training_list', $data);
    }

    public function add()
    {
        $this->load->view('admin/training_create');
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('description_new', 'Description', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required|in_list[1,2,3]');
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'Image ', 'required');
        }
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('brochure', 'Brochure', 'required');
        }
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('icon', 'Icon', 'required');
        }
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('banner_image', 'Banner Image', 'required');
        }

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/training_create');
        } else {
            // Handle image upload
            $image_name = '';
            if (!empty($_FILES['image']['name'])) {

                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/training/$fileName";
                $image_name = '/assets/images/training/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }

            // Handle brochure upload
            $brochure_name = '';
            if (!empty($_FILES['brochure']['name'])) {

                $temp = $_FILES['brochure']['tmp_name'];
                $name = $_FILES['brochure']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/brochure/$fileName";
                $brochure_name = '/assets/images/brochure/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }
            $icon = '';
            if (!empty($_FILES['icon']['name'])) {

                $temp = $_FILES['icon']['tmp_name'];
                $name = $_FILES['icon']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/training_icon/$fileName";
                $icon = '/assets/images/training_icon/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }

            // Handle brochure upload
            $banner_image = '';
            if (!empty($_FILES['banner_image']['name'])) {

                $temp = $_FILES['banner_image']['tmp_name'];
                $name = $_FILES['banner_image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/banner_image/$fileName";
                $banner_image = '/assets/images/banner_image/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }

            $data = array(
                'name' => $this->input->post('name'),
                'training_url' => str_replace(' ', '-', strtolower(trim($this->input->post('name')))),

                'description' => $this->input->post('description'),
                'description_new' => $this->input->post('description_new'),
                'image' => $image_name,
                'banner_image' => $banner_image,
                'icon' => $icon,
                'duration' => $this->input->post('duration'),
                'brochure' => $brochure_name,
                'status' => $this->input->post('status'),

                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),


                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace this with the actual created_by user ID
            );

            $result = $this->training_model->create_training($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Training created successfully.');
                redirect('admin/training');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/training');
            }
        }
    }

    public function edit($id)
    {
        $data['training'] = $this->training_model->get_training_by_id($id);
        // echo "<pre>"; print_r($data['training']); exit;
        $this->load->view('admin/training_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required|in_list[1,2,3]');

        // $this->form_validation->set_rules('image', 'Status', 'required');
        // $this->form_validation->set_rules('brochure', 'Status', 'required');
        // $this->form_validation->set_rules('icon', 'Status', 'required');
        // $this->form_validation->set_rules('banner_image', 'Status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/training_edit');
        } else {
            // Handle image upload
            $image_name = '';
            if (!empty($_FILES['image']['name'])) {
                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/training/$fileName";
                $image_name = '/assets/images/training/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            } else {
                $image_name = $this->input->post('old_image');

            }


            $brochure_name = '';
            if (!empty($_FILES['brochure']['name'])) {

                $temp = $_FILES['brochure']['tmp_name'];
                $name = $_FILES['brochure']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/brochure/$fileName";
                $brochure_name = '/assets/images/brochure/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            } else {
                $brochure_name = $this->input->post('old_brochure');

            }
            $icon = '';
            if (!empty($_FILES['icon']['name'])) {

                $temp = $_FILES['icon']['tmp_name'];
                $name = $_FILES['icon']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/training_icon/$fileName";
                $icon = '/assets/images/training_icon/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $icon = $this->input->post('old_icon');

            }

            // Handle brochure upload
            $banner_image = '';
            if (!empty($_FILES['banner_image']['name'])) {

                $temp = $_FILES['banner_image']['tmp_name'];
                $name = $_FILES['banner_image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/banner_image/$fileName";
                $banner_image = '/assets/images/banner_image/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $banner_image = $this->input->post('old_banner_image');
            }

            $data = array(
                'name' => $this->input->post('name'),
                'training_url' => str_replace(' ', '-', strtolower(trim($this->input->post('name')))),

                'description' => $this->input->post('description'),
                'description_new' => $this->input->post('description_new'),

                'image' => $image_name,
                'banner_image' => $banner_image,
                'icon' => $icon,
                'duration' => $this->input->post('duration'),
                'brochure' => $brochure_name,
                'status' => $this->input->post('status'),

                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '3' // Replace this with the actual created_by user ID
            );

            $result = $this->training_model->update_training($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Training updated successfully.');
                redirect('admin/training');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/training/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->training_model->delete_training($id);
        redirect('admin/training');
    }
}