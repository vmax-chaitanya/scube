<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CareersJobs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/CareersJobsModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // echo "hi";
        // exit;
        $data['jobs'] = $this->CareersJobsModel->getJobs();


        $this->load->view('admin/job_list', $data);
    }

    public function create()
    {
        $this->load->view('admin/job_create');
    }

    public function store()
    {
        $this->form_validation->set_rules('position', 'Position', 'required|max_length[500]');
        $this->form_validation->set_rules('qualification', 'qualification', 'required|max_length[500]');
        $this->form_validation->set_rules('experience', 'experience', 'required|max_length[500]');
        $this->form_validation->set_rules('salary_range', 'salary_range', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/job_create');
        } else {
            $data = array(
                'poisition' => $this->input->post('position'),
                // 'description' => $this->input->post('description'),
                'qualification' => $this->input->post('qualification'),
                'exprience' => $this->input->post('experience'),
                'salary' => $this->input->post('salary_range'),
                'status' => $this->input->post('status')
            );

            $result = $this->CareersJobsModel->createJob($data);

            if ($result) {
                $this->session->set_flashdata('success', 'Job created successfully.');
                redirect('admin/careersjobs');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('ad,om/careersjobs');
            }
        }
    }

    public function edit($id)
    {
        // echo "hi";
        // exit;
        $data['job'] = $this->CareersJobsModel->getJobById($id);
        $this->load->view('admin/job_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('position', 'Position', 'required|max_length[500]');
        $this->form_validation->set_rules('qualification', 'qualification', 'required|max_length[500]');
        $this->form_validation->set_rules('experience', 'experience', 'required|max_length[500]');
        $this->form_validation->set_rules('salary_range', 'salary_range', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/job_edit');
        } else {
            $data = array(
                'poisition' => $this->input->post('position'),
                // 'description' => $this->input->post('description'),
                'qualification' => $this->input->post('qualification'),
                'exprience' => $this->input->post('experience'),
                'salary' => $this->input->post('salary_range'),
                'status' => $this->input->post('status')
            );

            $result = $this->CareersJobsModel->updateJob($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Job updated successfully.');
                redirect('admin/careersjobs');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('careersjobs/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->CareersJobsModel->deleteJob($id);
        redirect('admin/careersjobs');
    }
}
