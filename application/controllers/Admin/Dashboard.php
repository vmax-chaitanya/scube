<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        // Load necessary libraries, models, etc.
    }

    public function index() {
        // Load data or perform necessary actions for the dashboard
        // For example, fetch statistics, recent activities, etc.
        // Load views and pass data as needed
        $data['page_title'] = 'Dashboard';
        // $data['user_count'] = $this->user_model->count_users();
        // $data['order_count'] = $this->order_model->count_orders();
        // $data['recent_orders'] = $this->order_model->get_recent_orders(5);

       
        $this->load->view('admin/dashboard', $data);
  
    }
}
