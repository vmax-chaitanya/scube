<?php
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/blog_model'); // Load the model to interact with the 'blogs' table
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['blogs'] = $this->blog_model->get_all_blogs(); // Fetch all blogs from the 'blogs' table
        $this->load->view('admin/blog_list', $data); // Load the view to display the list of blogs
    }

    public function add()
    {
        $this->load->view('admin/blog_create'); // Load the view to create a new blog
    }

    public function create()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        // Add more form validation rules for other fields if necessary

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/blog_create'); // Show the create blog form with validation errors if any
        } else {
            // Handle file upload for the image if needed
            // $image_name = $this->upload_image(); // You need to implement the upload_image() function
            if (!empty($_FILES['image']['name'])) {

                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/blog/$fileName";
                $image_name = '/assets/images/blog/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $image_name  = $this->input->post('old_image');
            }
            if (!empty($_FILES['banner_image']['name'])) {

                $temp = $_FILES['banner_image']['tmp_name'];
                $name = $_FILES['banner_image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/blog_banner/$fileName";
                $banner_image = '/assets/images/blog_banner/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }
            $data = array(
                'title' => $this->input->post('title'),
                'blog_url' => str_replace(' ', '-', strtolower(trim($this->input->post('title')))),

                'about' => $this->input->post('about'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'image' => $image_name, // Replace with the file path or URL of the image
                'banner_image' => $banner_image, // Replace with the file path or URL of the image

                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),

                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace with the actual user ID who created the blog
            );

            $result = $this->blog_model->create_blog($data); // Insert the blog data into the 'blogs' table
            if ($result) {
                $this->session->set_flashdata('success', 'Blog created successfully.');
                redirect('admin/blog');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/blog');
            }
        }
    }

    public function edit($id)
    {
        $data['blog'] = $this->blog_model->get_blog_by_id($id); // Fetch the specific blog using its ID
        $this->load->view('admin/blog_edit', $data); // Load the view to edit the selected blog
    }

    public function update($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        // Add more form validation rules for other fields if necessary

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/blog_edit'); // Show the edit blog form with validation errors if any
        } else {
            // Handle file upload for the image if needed
            // $image_name = $this->upload_image(); // You need to implement the upload_image() function
            if (!empty($_FILES['image']['name'])) {

                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/blog/$fileName";
                $image_name = '/assets/images/blog/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $image_name  = $this->input->post('old_image');
            }
            if (!empty($_FILES['banner_image']['name'])) {

                $temp = $_FILES['banner_image']['tmp_name'];
                $name = $_FILES['banner_image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/blog_banner/$fileName";
                $banner_image = '/assets/images/blog_banner/' . $fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
                $banner_image  = $this->input->post('old_banner_image');
            }
            $data = array(
                'title' => $this->input->post('title'),
                'blog_url' => str_replace(' ', '-', strtolower(trim($this->input->post('title')))),

                'about' => $this->input->post('about'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'image' => $image_name, // Replace with the file path or URL of the image
                'banner_image' => $banner_image, // Replace with the file path or URL of the image
                
                'meta_name' => $this->input->post('meta_name'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace with the actual user ID who updated the blog
            );

            $result = $this->blog_model->update_blog($id, $data); // Update the blog data in the 'blogs' table
            if ($result) {
                $this->session->set_flashdata('success', 'Blog updated successfully.');
                redirect('admin/blog');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/blog');
            }
        }
    }

    public function delete($id)
    {
        $this->blog_model->delete_blog($id); // Delete the specific blog using its ID
        redirect('admin/blog'); // Redirect back to the list of blogs after deleting
    }
}
?>
