<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingCurriculum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/training_curriculum_model');
        $this->load->model('Admin/training_model');

        $this->load->library('form_validation');
    }

    public function index($training_id)
    {
        $data['training_id'] = $training_id;
        $data['curriculums'] = $this->training_curriculum_model->get_curriculum_by_training($training_id);
        $data['training'] = $this->training_model->get_training_by_id($training_id);

        $this->load->view('admin/training_curriculum_list', $data);
    }

    public function add($training_id)
    {
        // Load view to add curriculum for a specific training
        $data['training_id'] = $training_id;
        $this->load->view('admin/training_curriculum_create', $data);
    }

    public function create($training_id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[150]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        //$this->form_validation->set_rules('icon', 'Icon', 'required|max_length[300]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/training_curriculum_create', array('training_id' => $training_id));
        } else {
            // Upload icon image and process data
            // Example upload logic:
            if (!empty($_FILES['icon']['name'])) {

                $temp = $_FILES['icon']['tmp_name'];
                $name = $_FILES['icon']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/curriculum/$fileName";
                $icon_path = '/assets/images/curriculum/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            } else {
                $icon_path = '';
            }

            $data = array(
                'training_id' => $training_id,
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'icon' => $icon_path,
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $this->session->userdata('user_id')
            );

            $result = $this->training_curriculum_model->create_curriculum($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Curriculum created successfully.');
                redirect('admin/training_curriculum/' . $training_id);
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/training_curriculum/add/' . $training_id);
            }
        }
    }

    public function edit($id)
    {
        $data['curriculum'] = $this->training_curriculum_model->get_curriculum_by_id($id);
        $this->load->view('admin/training_curriculum_edit', $data);
    }

    public function update($id)
    {
        // $this->form_validation->set_rules('training_id', 'Training ID', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[150]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/training_curriculum_edit');
        } else {
            $curriculum = $this->training_curriculum_model->get_curriculum_by_id($id);

            if (!empty($_FILES['icon']['name'])) {
                // Upload icon file
                $temp = $_FILES['icon']['tmp_name'];
                $name = $_FILES['icon']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/curriculum/$fileName";
                $icon_name = '/assets/images/curriculum/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            } else {
                $icon_name = $this->input->post('old_icon');
            }

            $data = array(
                'training_id' => $this->input->post('training_id'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'icon' => $icon_name,
                'created_at' => time(),
                'created_by' => '2' // Replace this with the actual created_by user ID
            );

            $result = $this->training_curriculum_model->update_curriculum($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Curriculum updated successfully.');
                redirect('admin/training_curriculum/'.$this->input->post('training_id'));
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/training_curriculum/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $curriculum = $this->training_curriculum_model->get_curriculum_by_id($id);

        if (!empty($curriculum['icon'])) {
            unlink('.' . $curriculum['icon']);
        }

        $this->training_curriculum_model->delete_curriculum($id);
        redirect('admin/training_curriculum');
    }
}
