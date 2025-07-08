<?php
class JobsModel extends CI_Model
{
    protected $table = 'jobs';

    public function create_job($data)
    {
        return $this->db->insert('jobs', $data);
    }

    public function get_all_jobs()
    {
        return $this->db
            ->where('status !=', 'Delete')
            // ->where('application_deadline >=', date('Y-m-d')) // today's date
            ->order_by('created_at', 'DESC')
            ->get($this->table)
            ->result();
    }

    public function job_unique_exists($jobUnique)
    {
        return $this->db->where('jobUnique', $jobUnique)->count_all_results($this->table) > 0;
    }

    public function get_job($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insert_job($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update_job($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    // public function delete_job($id)
    // {
    //     return $this->db->delete($this->table, ['id' => $id]);
    // }
    public function mark_as_deleted($id)
    {
        return $this->db
            ->where('id', $id)
            ->update($this->table, ['status' => 'Delete']);
    }

    public function is_slug_unique($slug, $exclude_id = null)
    {
        $this->db->where('slug', $slug);
        if ($exclude_id) {
            $this->db->where('id !=', $exclude_id);
        }
        return $this->db->get('jobs')->num_rows() === 0;
    }
}
