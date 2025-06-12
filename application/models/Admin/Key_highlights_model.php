<?php
class Key_highlights_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_key_highlights($training_id = null)
    {
        if ($training_id !== null) {
            $this->db->where('training_id', $training_id);
        }
        $query = $this->db->get('key_highlights');
        return $query->result_array();
    }

    public function create_key_highlight($data)
    {
        return $this->db->insert('key_highlights', $data);
    }

    public function get_key_highlight_by_id($id)
    {
        $query = $this->db->get_where('key_highlights', array('id' => $id));
        return $query->row_array();
    }

    public function update_key_highlight($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('key_highlights', $data);
    }

    public function delete_key_highlight($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('key_highlights');
    }
}
?>
