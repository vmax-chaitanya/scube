<?php
class JobApplication_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create_application($data)
    {
        return $this->db->insert('job_applications', $data);
    }

    public function get_all_applications()
    {
        return $this->db->get('job_applications')->result();
    }

    public function get_application_by_id($id)
    {
        return $this->db->get_where('job_applications', ['id' => $id])->row();
    }
}
