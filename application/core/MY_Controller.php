<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function require_superadmin()
    {
        if ($this->session->userdata('user_type') != '1') {
            // Optional: set a flash message
            $this->session->set_flashdata('error', 'Unauthorized access.');
            redirect('admin/dashboard'); // Or wherever you want
            exit;
        }
    }
}
