<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/user_model'); // Assuming your user model is in 'admin' folder
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function do_login()
    {
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

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        // Unset other user data from the session as needed
        redirect('admin/login');
    }

    // Show all users
    public function listing()
    {
        $data['users'] = $this->user_model->get_all_users();
        $this->load->view('admin/userList', $data);
    }

    public function createUser()
    {
        // $data['users'] = $this->user_model->get_all_users();
        $this->load->view('admin/userCreate');
    }


    // Create new user
    public function store()
    {
        if ($_POST) {
            $this->load->helper(['form', 'url']);

            // Set validation rules
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            // $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('user_type', 'User Type', 'required|in_list[1,2,3]');
            $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
            $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required');

            if ($this->form_validation->run() === TRUE) {
                // Image upload handling
                $image = null;
                if (!empty($_FILES['image']['name'])) {
                    $config['upload_path']   = './assets/images/users/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size']      = 2048; // 2MB max
                    $config['file_name']     = time() . '_' . $_FILES['image']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {
                        $upload_data = $this->upload->data();
                        $image = $upload_data['file_name'];
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/user');
                    }
                }

                // Insert user data
                $insert_data = [
                    'full_name'     => $this->input->post('full_name'),
                    'username'      => $this->input->post('username'),
                    'email'         => $this->input->post('email'),
                    'password'      => password_hash('123456', PASSWORD_BCRYPT),
                    'mobile_number' => $this->input->post('mobile_number'),
                    'user_type'     => $this->input->post('user_type'),
                    'status'        => $this->input->post('status'),
                    'image'         => $image,
                    'created_at'    => date('Y-m-d H:i:s'),
                ];

                $this->user_model->insert_user($insert_data);

                $this->session->set_flashdata('success', 'User created successfully.');
                redirect('admin/user');
            }
        }

        $this->load->view('admin/userCreate');
    }
    public function edit($id)
    {

        $data['user'] = $this->user_model->get_user_by_id($id);

        $this->load->view('admin/userEdit', $data);
    }

    public function update($id)
    {
        $user = $this->user_model->get_user_by_id($id);
        // if ($_POST) {
        // Validation rules

        // echo 
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username[' . $id . ']');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email[' . $id . ']');
        // $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('user_type', 'User Type', 'required|in_list[1,2,3]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required');

        if ($this->form_validation->run() === TRUE) {
            // print_r($user);

            // Handle image upload
            $image = $user->image; // Default to existing
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './assets/images/users/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time() . '_' . $_FILES['image']['name'];
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/users/edit/' . $id);
                }
            }

            $update_data = [
                'full_name'     => $this->input->post('full_name'),
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email'),
                'mobile_number' => $this->input->post('mobile_number'),
                'user_type'     => $this->input->post('user_type'),
                'status'        => $this->input->post('status'),
                'image'         => $image,
                'updated_at'    => date('Y-m-d H:i:s')
            ];

            // Update password if provided
            if (!empty($this->input->post('password'))) {
                $update_data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            $this->user_model->update_user($id, $update_data);
            $this->session->set_flashdata('success', 'User updated successfully.');
            redirect('admin/user');
        } else {
            // ❌ Validation failed, reload view with errors and old data
            $data['user'] = (object)[
                'id'            => $id,
                'full_name'     => $this->input->post('full_name'),
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email'),
                'mobile_number' => $this->input->post('mobile_number'),
                'user_type'     => $this->input->post('user_type'),
                'status'        => $this->input->post('status'),
                'image'         => $user->image // keep existing image
            ];
        }

        $this->load->view('admin/userEdit', $data);
    }
    // Inside your controller class

    public function check_username($username, $id)
    {
        $user = $this->user_model->get_user_by_username_except_id($username, $id);
        if ($user) {
            $this->form_validation->set_message('check_username', 'The username "' . $username . '" is already taken.');
            return false;
        }
        return true;
    }

    public function check_email($email, $id)
    {
        $user = $this->user_model->get_user_by_email_except_id($email, $id);
        if ($user) {
            $this->form_validation->set_message('check_email', 'The email "' . $email . '" is already in use.');
            return false;
        }
        return true;
    }

    public function delete($id)
    {
        $user = $this->user_model->get_user_by_id($id);

        if (!$user) {
            show_404();
        }

        $this->user_model->delete_user($id);
        $this->session->set_flashdata('success', 'User deleted successfully.');
        redirect('admin/user');
    }

    public function change_password()
    {
        $this->load->library('form_validation');

        // Load current user info (assuming session has user_id)
        $user_id = $this->session->userdata('user_id');
        $user = $this->user_model->get_user_by_id($user_id);

        if ($_POST) {
            // Validation rules
            $this->form_validation->set_rules('old_password', 'Old Password', 'required|callback_check_old_password');
            $this->form_validation->set_rules('password', 'New Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

            if ($this->form_validation->run() === TRUE) {
                $hashed_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
                $this->user_model->update_user($user_id, ['password' => $hashed_password]);
                $this->session->set_flashdata('success', 'Password changed successfully.');
                redirect('admin/user/change_password');
            }
        }

        $this->load->view('admin/changePassword', ['user' => $user]);
    }

    // Callback to validate old password
    public function check_old_password($old_password)
    {
        $user_id = $this->session->userdata('user_id');
        $user = $this->user_model->get_user_by_id($user_id);

        if (!password_verify($old_password, $user->password)) {
            $this->form_validation->set_message('check_old_password', 'The old password is incorrect.');
            return false;
        }

        return true;
    }
}
