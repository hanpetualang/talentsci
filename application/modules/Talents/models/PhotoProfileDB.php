<?php

class PhotoProfileDB extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function insert($data) {
        $this->db->insert('category', $data);
    }
    public function get_picture($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('photo_profile');
        if(isset($query->row()->photo_profile))
            return $query->row()->photo_profile;
        return "";
    }
    public function last_id() {
        return $this->db->insert_id();
    }
}

?>