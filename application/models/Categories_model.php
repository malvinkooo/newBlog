<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function get_categories()
    {
        $this->load->database();
        $query = $this->db->get('categories');
        return $query->result_array();
    }
}
