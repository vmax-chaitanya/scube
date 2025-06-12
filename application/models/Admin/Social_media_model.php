<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Social_media_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_social_media()
    {
        $query = $this->db->get('social_media');
        return $query->result_array();
    }

    public function create_social_media($data)
    {
        return $this->db->insert('social_media', $data);
    }

    public function get_social_media_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('social_media');
        return $query->row_array();
    }

    public function update_social_media($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('social_media', $data);
    }

    public function delete_social_media($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('social_media');
    }

}
