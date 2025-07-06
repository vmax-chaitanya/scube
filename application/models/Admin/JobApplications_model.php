<?php
class JobApplications_model extends CI_Model
{
    protected $table = 'job_applications';

    public function get_applications_by_status($status)
    {
        return $this->db
            ->select('job_applications.*, jobs.job_title,jobs.work_type') // select required fields
            ->from('job_applications')
            ->join('jobs', 'jobs.id = job_applications.job_id', 'left')
            ->where('job_applications.status', $status)
            ->order_by('job_applications.created_at', 'DESC')
            ->get()
            ->result();
    }
    public function all()
    {
        return $this->db
            ->select('job_applications.*, jobs.job_title,jobs.work_type') // select required fields
            ->from('job_applications')
            ->join('jobs', 'jobs.id = job_applications.job_id', 'left')
            // ->where('job_applications.status', $status)
            ->order_by('job_applications.created_at', 'DESC')
            ->get()
            ->result();
    }


    public function get_application_by_id($id)
    {
        return $this->db
            ->select('job_applications.*, jobs.job_title,jobs.work_type')
            ->from('job_applications')
            ->join('jobs', 'jobs.id = job_applications.job_id', 'left')
            ->where('job_applications.id', $id)
            ->get()
            ->row();
    }


    public function update_application_status($id, $status)
    {
        return $this->db->where('id', $id)->update($this->table, ['status' => $status]);
    }
    public function get_by_status_and_job($status, $job_id)
    {
        return $this->db
            ->select('job_applications.*, jobs.job_title,jobs.work_type')
            ->from('job_applications')
            ->join('jobs', 'jobs.id = job_applications.job_id', 'left')
            ->where('job_applications.status', $status)
            ->where('job_applications.job_id', $job_id)
            ->order_by('job_applications.created_at', 'DESC')
            ->get()
            ->result();
    }
    public function delete_application($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
