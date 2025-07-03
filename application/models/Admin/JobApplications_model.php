<?php
class JobApplications_model extends CI_Model
{
    protected $table = 'job_applications';

    public function get_applications_by_status($status)
    {
        return $this->db->where('status', $status)->order_by('created_at', 'DESC')->get($this->table)->result();
    }

    public function get_application_by_id($id)
    {
        return $this->db->where('id', $id)->get($this->table)->row();
    }

    public function update_application_status($id, $status)
    {
        return $this->db->where('id', $id)->update($this->table, ['status' => $status]);
    }
    public function get_by_status_and_job($status, $job_id)
    {
        return $this->db->where('status', $status)
            ->where('job_id', $job_id)
            ->order_by('created_at', 'DESC')
            ->get($this->table)
            ->result();
    }
}
