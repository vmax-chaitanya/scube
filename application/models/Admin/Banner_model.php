<?php

class Banner_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_banners()
    {
        return $this->db->get('banners')->result_array();
    }

    public function get_banner_by_id($id)
    {
        return $this->db->get_where('banners', array('id' => $id))->row_array();
    }

    public function create_banner($data)
    {
        return $this->db->insert('banners', $data);
    }

    public function update_banner($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('banners', $data);
    }

    public function delete_banner($id)
    {
        return $this->db->delete('banners', array('id' => $id));
    }
}
?>
