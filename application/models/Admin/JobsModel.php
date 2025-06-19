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
        return $this->db->get($this->table)->result();
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

    public function delete_job($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
