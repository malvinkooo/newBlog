<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();        
    }

    public function get_categories() {
        $query_result = $this->db->get('categories');
        return $query_result->result_array();
    }

    public function get_category($id) {
        $this->db->where('id', $id);
        $query_result = $this->db->get('categories');

        return $query_result->result_array()[0] ?? FALSE;
    }

    public function is_category_exist($id) {
       $this->db->where('id', $id);
       $this->db->select('count(*) AS count');
       $query_result = $this->db->get('categories');

       return boolval( $query_result->result_array()[0]['count'] );
    }

    public function add_category($data) {
        $this->db->insert('categories', $data);
    }

    public function edit_category($data) {
        $this->db->set('name', $data['name']);
        $this->db->where('id', $data['id']);
        $this->db->update('categories');
    }

    public function remove_category($id) {
        $this->db->where('id', $id);
        $this->db->delete('categories');

        return boolval($this->db->affected_rows());
    }
}
