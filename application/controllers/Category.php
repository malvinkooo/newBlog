<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function _remap($id){
        $this->index($id);
    }

    public function index($id)
    {
        $this->load->model('categories_model');
        $this->load->model('articles_model');
        $data['category'] = $this->categories_model->get_category($id);
        $data['categories'] = $this->categories_model->get_categories();
        $data['articles'] = $this->articles_model->get_articles_by_category($id);

        $this->load->view('category', $data);
    }
}

