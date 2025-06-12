<?php
class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/gallery_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['gallery'] = $this->gallery_model->get_all_gallery_items(1);
        $data['client_logos'] = $this->gallery_model->get_all_gallery_items(2);
        $data['tools'] = $this->gallery_model->get_all_gallery_items(3);
        $data['certification'] = $this->gallery_model->get_all_gallery_items(4);
        $this->load->view('admin/gallery_list', $data);
    }

    public function add()
    {
        $this->load->view('admin/gallery_create');
    }

    public function create()
    {
        // $this->form_validation->set_rules('title', 'Title', 'required|max_length[300]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2,3,4]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/gallery_create');
        } else {
            if (!empty($_FILES['image']['name'])) {

                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/gallery/$fileName";
                $image_name = '/assets/images/gallery/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }
            $data = array(
                'title' => $this->input->post('title'),
                'image' => $image_name, // Replace with the file path or URL of the image
                'description' => $this->input->post('description'),
                'short_text' => $this->input->post('short_text'),

                'status' => $this->input->post('status'),
                'type' => $this->input->post('type'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace with the actual user ID who created the gallery item
            );

            $result = $this->gallery_model->create_gallery_item($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Gallery item created successfully.');
                redirect('admin/gallery');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/gallery');
            }
        }
    }

    public function edit($id)
    {
        $data['gallery_item'] = $this->gallery_model->get_gallery_item_by_id($id);
        $this->load->view('admin/gallery_edit', $data);
    }

    public function update($id)
    {
        // $this->form_validation->set_rules('title', 'Title', 'required|max_length[300]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2,3,4]');

        if ($this->form_validation->run() === FALSE) {
            $data['gallery_item'] = $this->gallery_model->get_gallery_item_by_id($id);
            $this->load->view('admin/gallery_edit', $data);
        } else {
            if (!empty($_FILES['image']['name'])) {

                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/gallery/$fileName";
                $image_name = '/assets/images/gallery/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            } else {
                $image_name = $this->input->post('old_image');
            }
            $data = array(
                'title' => $this->input->post('title'),
                'image' => $image_name, // Replace with the file path or URL of the image
                'description' => $this->input->post('description'),
                'short_text' => $this->input->post('short_text'),
                'status' => $this->input->post('status'),
                'type' => $this->input->post('type'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $this->input->post('created_by') // Replace with the actual user ID who updated the gallery item
            );

            $result = $this->gallery_model->update_gallery_item($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Gallery item updated successfully.');
                redirect('admin/gallery');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/gallery');
            }
        }
    }

    public function delete($id)
    {
        $this->gallery_model->delete_gallery_item($id);
        redirect('admin/gallery');
    }
}
