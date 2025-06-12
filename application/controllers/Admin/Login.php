<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin/user_model'); // Assuming your user model is in 'admin' folder
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function do_login() {
        $username_email = $this->input->post('username_email');
        $password = $this->input->post('password');

        // Check if the user exists with provided username/email and password
        $user = $this->user_model->authenticate_user($username_email, $password);
      //  echo $this->db->last_query(); exit;
        if ($user) {
            // User login successful, set user data in session
            $user_data = array(
                'user_id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'user_type' => $user->user_type,
                // Add other relevant user data as needed
            );

            $this->session->set_userdata($user_data);
            redirect('admin/dashboard'); // Replace 'admin/dashboard' with your admin/dashboard page
        } else {
            // Login failed, redirect back to login page with error message
            $this->session->set_flashdata('error', 'Invalid username/email or password.');
            redirect('admin/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        // Unset other user data from the session as needed
        redirect('admin/login');
    }
}
