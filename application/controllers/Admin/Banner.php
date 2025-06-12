<?php
class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/banner_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['banners'] = $this->banner_model->get_all_banners();
        $this->load->view('admin/banners_list', $data);
    }
    public function add()
    {
        $this->load->view('admin/banner_create');
    }

    public function create()
    {
        //    print_r($this->input->post()); 
        //    print_r($_FILES); exit;
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[500]');
        // $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        // $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2,3]');
        //$this->form_validation->set_rules('image', 'Image', 'required');
        // $this->form_validation->set_rules('created_by', 'Created By', 'required|integer');

        if ($this->form_validation->run() === FALSE) {
            //echo "error"; exit;
            ///echo validation_errors(); exit;
            //redirect('admin/banner/add');
            $this->load->view('admin/banner_create');

            // Display the form to create a new banner
            // Load your view for creating banners with form validation errors if any
        } else {
            if (!empty($_FILES['image']['name'])) {

                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/banners/$fileName";
                $image_name = '/assets/images/banners/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }

            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'type' => '1',
                'image' => $image_name,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2'
            );

            $result = $this->banner_model->create_banner($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Banner created successfully.');
                redirect('admin/banner');
            } else {
                $this->session->set_flashdata('error', 'Error Occured');
                redirect('admin/banner');
            }


            // Redirect back to the list of banners or show a success message
        }
    }

    public function edit($id)
    {
        $data['banner'] = $this->banner_model->get_banner_by_id($id);
        $this->load->view('admin/banner_edit', $data);

        // Display the form to edit an existing banner using $data['banner']
        // Load your view for editing banners with form validation errors if any
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        // $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        // $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2,3]');
        // $this->form_validation->set_rules('image', 'Image', 'required|max_length[300]');
        // $this->form_validation->set_rules('created_by', 'Created By', 'required|integer');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/banner_edit');
        } else {
            if (!empty($_FILES['image']['name'])) {

                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/banners/$fileName";
                $image_name = '/assets/images/banners/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            } else {
                $image_name = $this->input->post('old_image');
            }
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'type' => '1',
                'image' => $image_name,
                'created_at' => time(),
                'created_by' => $this->input->post('created_by')
            );

            $this->banner_model->update_banner($id, $data);
            redirect('admin/banner');

            // Redirect back to the list of banners or show a success message
        }
    }

    public function delete($id)
    {
        $this->banner_model->delete_banner($id);
        // Redirect back to the list of banners after deleting or show a success message
        redirect('admin/banner');
    }
}
