<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CertificationCourses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/certification_courses_model'); // Load the model for certification courses
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['courses'] = $this->certification_courses_model->get_all_courses();
        $this->load->view('admin/certification_courses_list', $data); // Load the view for listing courses
    }

    public function add()
    {
        $this->load->view('admin/certification_courses_create');
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[150]');
        $this->form_validation->set_rules('tag', 'Tag', 'required|max_length[150]');
        $this->form_validation->set_rules('rating', 'Rating', 'required|numeric');
        $this->form_validation->set_rules('learners', 'Learners', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/certification_courses_create');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'tag' => $this->input->post('tag'),
                'rating' => $this->input->post('rating'),
                'learners' => $this->input->post('learners'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace this with the actual created_by user ID
            );

            $result = $this->certification_courses_model->create_course($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Certification course created successfully.');
                redirect('admin/certification_courses');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/certification_courses');
            }
        }
    }

    public function edit($id)
    {
        $data['course'] = $this->certification_courses_model->get_course_by_id($id);
        $this->load->view('admin/certification_courses_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[150]');
        $this->form_validation->set_rules('tag', 'Tag', 'required|max_length[150]');
        $this->form_validation->set_rules('rating', 'Rating', 'required|numeric');
        $this->form_validation->set_rules('learners', 'Learners', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/certification_courses_edit');
        } else {
            $course = $this->certification_courses_model->get_course_by_id($id);

            $data = array(
                'name' => $this->input->post('name'),
                'tag' => $this->input->post('tag'),
                'rating' => $this->input->post('rating'),
                'learners' => $this->input->post('learners'),
                'status' => $this->input->post('status'),

                'created_at' => time(),
                'created_by' => '2'// Replace this with the actual created_by user ID
            );

            $result = $this->certification_courses_model->update_course($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Certification course updated successfully.');
                redirect('admin/certification_courses');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/certification_courses/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->certification_courses_model->delete_course($id);
        redirect('admin/certification_courses');
    }
}
