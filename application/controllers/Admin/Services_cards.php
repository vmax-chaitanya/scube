<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_cards extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
		$this->load->model('Admin/services_model');
        $this->load->model('Admin/services_cards_model');
        $this->load->library('form_validation');
    }

    public function index($service_id)
    {
        $data['service'] = $this->services_model->get_service_by_id($service_id);

        $type=1;
        $data['service_cards_type_1'] = $this->services_cards_model->get_all_services_cards($service_id,$type);
       
        $type=2;
        $data['service_cards_type_2'] = $this->services_cards_model->get_all_services_cards($service_id,$type);

		$type=3;
         $data['service_cards_type_3'] = $this->services_cards_model->get_all_services_cards($service_id,$type);
        $this->load->view('admin/services_cards_list', $data);
    }

    public function add($service_id)
    {
        $this->load->view('admin/services_cards_create');
    }

    public function create($service_id)
    {
        //$this->form_validation->set_rules('service_id', 'Service ID', 'required|integer');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/services_cards_create');
        } else {

            if (!empty($_FILES['image']['name'])) {
               
                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/service_cards/$fileName";
                $image_name = '/assets/images/service_cards/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            }

            $data = array(
                'service_id' => $service_id,
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'type' => $this->input->post('type'),
                'image' => $image_name,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace this with the actual created_by user ID
            );

            $result = $this->services_cards_model->create_services_card($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Services Card created successfully.');
                redirect("admin/services_cards/$service_id");
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect("admin/services_cards/$service_id");

            }
        }
    }

    public function edit($id, $service_id)
    {
        $data['service_card'] = $this->services_cards_model->get_services_card_by_id($id);
        $this->load->view('admin/services_cards_edit', $data);
    }

    public function update($id)
    {
      
        // $this->form_validation->set_rules('service_id', 'Service ID', 'required|integer');
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $data['service_card'] = $this->services_cards_model->get_services_card_by_id($id);
            $this->load->view('admin/services_cards_edit',$data);
        } else {
           // $services_card = $this->services_cards_model->get_services_card_by_id($id);

            if (!empty($_FILES['image']['name'])) {
               
                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/service_cards/$fileName";
                $image_name = '/assets/images/service_cards/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $image_name = $this->input->post('old_image');
            }
            $service_id = $this->input->post('service_id');
            $data = array(
                'service_id' =>$this->input->post('service_id'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'type' => $this->input->post('type'),
                'image' => $image_name,
                'created_at' => time(),
                'created_by' => $this->input->post('created_by') // Replace this with the actual created_by user ID
            );

            $result = $this->services_cards_model->update_services_card($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Services Card updated successfully.');
                redirect('admin/services_cards'.'/'.$service_id);
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/services_cards/edit/' . $id.'/'.$service_id);
            }
        }
    }

    public function delete($id,$service_id)
    {
        $services_card = $this->services_cards_model->get_services_card_by_id($id);

        if (!empty($services_card['image'])) {
            unlink('.' . $services_card['image']);
        }

        $this->services_cards_model->delete_services_card($id);
        redirect('admin/services_cards/'.$service_id);
    }
}
