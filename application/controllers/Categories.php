<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function index()
    {
        $this->load->model('categories_model');
        $data['categories'] = $this->categories_model->get_categories();
        $this->load->view('categories', $data);
    }

    public function add_form()
    {
        $this->load->model('categories_model');
        $data['categories'] = $this->categories_model->get_categories();
        $this->load->view('modify_category', $data);
    }

    public function add() {
        $data['name'] = $_POST['name'];
        $this->load->model('categories_model');
        $this->categories_model->add_category($data);

        $this->load->helper('url');
        redirect('//blog.ua/categories/');
    }
}
