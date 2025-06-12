<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Social_media extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/social_media_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['social_media'] = $this->social_media_model->get_all_social_media();
        $this->load->view('admin/social_media_list', $data);
    }

    public function add()
    {
        $data['social_media'] = $this->social_media_model->get_social_media_by_id(1);
        $this->load->view('admin/social_media_create',$data);
    }

    // public function create()
    // {
    //     $this->form_validation->set_rules('gmail', 'Gmail', 'required|max_length[300]');
    //     // Add validation rules for other fields as needed

    //     if ($this->form_validation->run() === FALSE) {
    //         $this->load->view('admin/social_media_create');
    //     } else {
    //         $data = array(
    //             'gmail' => $this->input->post('gmail'),
    //             'facebook' => $this->input->post('facebook'),
    //             'twitter' => $this->input->post('twitter'),
    //             'instagram' => $this->input->post('instagram'),
    //             'pinterest' => $this->input->post('pinterest'),
    //             'whatsapp' => $this->input->post('whatsapp'),
    //             'quora' => $this->input->post('quora'),
    //             'linkedin' => $this->input->post('linkedin'),
    //             'created_at' => date("Y-m-d H:i:s")
    //         );

    //         $result = $this->social_media_model->create_social_media($data);
    //         if ($result) {
    //             $this->session->set_flashdata('success', 'Social media data created successfully.');
    //             redirect('admin/social_media');
    //         } else {
    //             $this->session->set_flashdata('error', 'Error Occurred');
    //             redirect('admin/social_media');
    //         }
    //     }
    // }

    public function edit($id)
    {
        $data['social_media'] = $this->social_media_model->get_social_media_by_id($id);
        $this->load->view('admin/social_media_create', $data);
    }

    // public function update($id)
    // {
    //     $this->form_validation->set_rules('gmail', 'Gmail', 'required|max_length[300]');
    //     // Add validation rules for other fields as needed

    //     if ($this->form_validation->run() === FALSE) {
    //         $this->load->view('admin/social_media_edit');
    //     } else {
    //         $data = array(
    //             'gmail' => $this->input->post('gmail'),
    //             'facebook' => $this->input->post('facebook'),
    //             'twitter' => $this->input->post('twitter'),
    //             'instagram' => $this->input->post('instagram'),
    //             'pinterest' => $this->input->post('pinterest'),
    //             'whatsapp' => $this->input->post('whatsapp'),
    //             'quora' => $this->input->post('quora'),
    //             'linkedin' => $this->input->post('linkedin'),
    //             'created_at' => time()
    //         );

    //         $result = $this->social_media_model->update_social_media($id, $data);
    //         if ($result) {
    //             $this->session->set_flashdata('success', 'Social media data updated successfully.');
    //             redirect('admin/social_media');
    //         } else {
    //             $this->session->set_flashdata('error', 'Error Occurred');
    //             redirect('admin/social_media/edit/' . $id);
    //         }
    //     }
    // }

    public function delete($id)
    {
        $this->social_media_model->delete_social_media($id);
        redirect('admin/social_media');
    }

    public function create_or_update_social_media()
    {
        //print_r($_FILES['mission_image']['name']); exit;
        $id = $this->input->post('id'); // Get the ID from the form, if available
        if (!empty($_FILES['mission_image']['name'])) {

            $temp = $_FILES['mission_image']['tmp_name'];
            $name = $_FILES['mission_image']['name'];
            $fileName = time() . $name;
            $path = "./assets/images/mission/$fileName";
            $mission_image = '/assets/images/mission/' . $fileName;
            $a = move_uploaded_file($temp, $path);
        } else {
            $mission_image = $this->input->post('old_mission_image');

        }
        if (!empty($_FILES['vision_image']['name'])) {

            $temp = $_FILES['vision_image']['tmp_name'];
            $name = $_FILES['vision_image']['name'];
            $fileName = time() . $name;
            $path = "./assets/images/mission/$fileName";
            $vision_image = '/assets/images/mission/' . $fileName;
            $a = move_uploaded_file($temp, $path);
        } else {
            $vision_image = $this->input->post('old_vision_image');

        }
        if (!empty($_FILES['value_image']['name'])) {

            $temp = $_FILES['value_image']['tmp_name'];
            $name = $_FILES['value_image']['name'];
            $fileName = time() . $name;
            $path = "./assets/images/mission/$fileName";
            $value_image = '/assets/images/mission/' . $fileName;
            $a = move_uploaded_file($temp, $path);
        } else {
            $value_image = $this->input->post('old_value_image');

        }
        $data = array(
            'gmail' => $this->input->post('gmail'),
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'instagram' => $this->input->post('instagram'),
            'pinterest' => $this->input->post('pinterest'),
            'whatsapp' => $this->input->post('whatsapp'),
            'quora' => $this->input->post('quora'),
            'linkedin' => $this->input->post('linkedin'),
            'youtube' => $this->input->post('youtube'),

            'mission_image' => $mission_image,
            'mission' => $this->input->post('mission'),

            'vision_image' => $vision_image,
            'vision' => $this->input->post('vision'),

            'value_image' =>  $value_image,
            'value' => $this->input->post('value'),

            'created_at' => date("Y-m-d H:i:s")
        );
        if (!empty($id)) {
            $this->session->set_flashdata('success', 'Social media  Updated successfully.');
            $this->social_media_model->update_social_media($id, $data);
        } else {
            $this->session->set_flashdata('success', 'Social media  created successfully.');
            $this->social_media_model->create_social_media($data);
        }

        redirect('admin/social_media/add');
    }
}
