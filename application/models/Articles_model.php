<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {

    public function get_articles_by_category($id)
    {
        $this->load->database();
        $this->db->where('category_id', $id);
        $this->db->order_by('date', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get('articles');

        return $query->result_array();
    }
}

