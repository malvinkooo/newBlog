<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {

    public function get_articles_by_category($id)
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('category_id', $id);
        $this->db->limit(5);
		$this->db->join('categories', 'categories.id = articles.category_id');
        $this->db->order_by('date', 'DESC');
		$query = $this->db->get();

        return $query->result_array();
    }
}

