<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function _remap($id) {
        $this->index($id);
    }

    public function index($id) {
        $this->load->model('categories_model');
        $this->load->model('articles_model');

        if(!$this->categories_model->is_category_exist($id)) {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        $data = [
            'category' => $this->categories_model->get_category($id),
            'categories' => $this->categories_model->get_categories(),
            'articles' => $this->articles_model->get_articles_by_category_id($id, $this->input->get('limit'))
        ];

        $this->load->view('category', $data);
    }
}