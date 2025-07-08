<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    public function get_active_jobs()
    {
        // $this->db->where('status', 'Active');
        // $this->db->order_by('posted_date', 'DESC');
        // return $this->db->get('jobs')->result();
        return $this->db
            ->where('status', 'Active')
            ->where('application_deadline >=', date('Y-m-d')) // today's date
            ->order_by('created_at', 'DESC')
            ->get('jobs')
            ->result();
    }
    // public function get_job_by_id($id)
    // {
    //     return $this->db->get_where('jobs', ['id' => $id, 'status' => 'Active'])->row();
    // }
    public function get_job_by_slug($slug)
    {
        return $this->db->get_where('jobs', ['slug' => $slug])->row();
    }
}
