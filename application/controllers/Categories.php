<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Validator.php');

class Categories extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->validator = new Validator();
    }

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
        $data['name'] = $this->input->post('name');
        $this->validator->is_category_name_valid($data['name']);
        $this->load->model('categories_model');
        $this->categories_model->add_category($data);
        $this->load->helper('url');
        redirect('/categories/');
    }

    public function remove_confirm($id)
    {
        $this->load->model('categories_model');
        $data['category'] = $this->categories_model->get_category($id);

        if( empty($data['category']) )
        {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        $this->load->view('category_remove_confirm', $data);
    }

    public function remove($id)
    {
        $this->load->model('categories_model');
        $query_result = $this->categories_model->remove_category($id);

        if(!$query_result)
        {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        $this->load->helper('url');
        redirect('/categories/');
    }

    public function edit_form($id)
    {
        $this->load->model('categories_model');
        $data['category'] = $this->categories_model->get_category($id);
        $this->load->view('modify_category', $data);
    }

    public function edit() {
        $data = $this->input->post();
        $this->load->model('categories_model');
        $query_result = $this->categories_model->edit_category($data);

        if(!$query_result)
        {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        $this->load->helper('url');
        redirect('/categories/');
    }
}
