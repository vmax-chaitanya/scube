<?php
class Gallery_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_gallery_items($type)
    {
		$this->db->where('type',$type);
        $query = $this->db->get('gallery');
        return $query->result_array();
    }

    public function create_gallery_item($data)
    {
        return $this->db->insert('gallery', $data);
    }

    public function get_gallery_item_by_id($id)
    {
        $query = $this->db->get_where('gallery', array('id' => $id));
        return $query->row_array();
    }

    public function update_gallery_item($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('gallery', $data);
    }

    public function delete_gallery_item($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('gallery');
    }
}
?>
