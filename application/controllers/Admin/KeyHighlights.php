<?php
class KeyHighlights extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/training_model');

        $this->load->model('Admin/key_highlights_model');
        $this->load->library('form_validation');
    }

    public function index($training_id)
    {
        $data['key_highlights'] = $this->key_highlights_model->get_all_key_highlights($training_id);
        $data['training'] = $this->training_model->get_training_by_id($training_id);
        //print_r($data['training']); exit;
        $this->load->view('admin/key_highlights_list', $data);
    }

    public function add($training_id)
    {
        $this->load->view('admin/key_highlights_create');
    }

    public function create($training_id)
    {
        //$this->form_validation->set_rules('training_id', 'Training ID', 'required|integer');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/key_highlights_create/'.$training_id);
        } else {
            $data = array(
                'training_id' => $training_id,
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace with the actual user ID who created the key highlight
            );

            $result = $this->key_highlights_model->create_key_highlight($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Key Highlight created successfully.');
                redirect('admin/key_highlights/'.$training_id);
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/key_highlights/'.$training_id);
            }
        }
    }

    public function edit($id)
    {
        $data['key_highlight'] = $this->key_highlights_model->get_key_highlight_by_id($id);
       // echo "<pre>"; print_r($data);
        $this->load->view('admin/key_highlights_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('training_id', 'Training ID', 'required|integer');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $data['key_highlight'] = $this->key_highlights_model->get_key_highlight_by_id($id);
            $this->load->view('admin/key_highlights_edit', $data);
        } else {
            $data = array(
                'training_id' => $this->input->post('training_id'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'created_at' => time(),
                'created_by' => $this->input->post('created_by') // Replace with the actual user ID who updated the key highlight
            );

            $result = $this->key_highlights_model->update_key_highlight($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Key Highlight updated successfully.');
                redirect('admin/key_highlights');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/key_highlights');
            }
        }
    }

    public function delete($id)
    {
        $this->key_highlights_model->delete_key_highlight($id);
        redirect('admin/key_highlights');
    }
}
?>
