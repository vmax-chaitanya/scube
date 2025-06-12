<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MetaTagsDataModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_meta_tags() {
        return $this->db->get('meta_tags_data')->result_array();
    }

    public function get_meta_tag($id) {
        return $this->db->get_where('meta_tags_data', array('id' => $id))->row_array();
    }

    public function insert_meta_tag($data) {
        return $this->db->insert('meta_tags_data', $data);
    }

    public function update_meta_tag($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('meta_tags_data', $data);
    }

    public function delete_meta_tag($id) {
        return $this->db->delete('meta_tags_data', array('id' => $id));
    }

}
