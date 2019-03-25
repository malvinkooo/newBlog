<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('categories_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['categories'] = $this->categories_model->get_categories();
        $this->load->view('categories', $data);
    }

    public function add() {
        $data['isCategoryAdd'] = TRUE;

        if($this->input->server('REQUEST_METHOD') == 'GET') {
            $data['categories'] = $this->categories_model->get_categories();
            $data['category']['name'] = '';
            $data['category']['id'] = '';
            $this->load->view('modify_category', $data);
        } else if($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('name', 'Name', array('required', 'min_length[2]', 'max_length[255]'));

            if ($this->form_validation->run() == FALSE) {
                $data['categories'] = $this->categories_model->get_categories();
                $data['category']['name'] = $this->input->post('name');
                $data['category']['id'] = '';
                $this->load->view('modify_category', $data);
            } else {
                $data = $this->input->post();
                $this->categories_model->add_category($data);
                redirect('/categories/');
            }
        }
    }

    public function remove_confirm($id)
    {
        $data['category'] = $this->categories_model->get_category($id);

        if(!$data['category'])
        {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        $this->load->view('category_remove_confirm', $data);
    }

    public function remove($id)
    {
        $query_result = $this->categories_model->remove_category($id);

        if(!$query_result) {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        redirect('/categories/');
    }

    public function edit($id) {
        if($this->input->server('REQUEST_METHOD') == 'GET') {
            $data = array(
                'categories' => $this->categories_model->get_categories(),
                'category' => $this->categories_model->get_category($id)
            );

            if(!$data['category']) {
                show_404('application/views/errors/html/error_404.php');
                exit();
            }

            $this->load->view('modify_category', $data);
        } else if($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('name', 'Name', array('required', 'min_length[2]', 'max_length[255]'));

            if ($this->form_validation->run() == FALSE) {
                $data['categories'] = $this->categories_model->get_categories();
                $data['category']['name'] =  $this->input->post('name');
                $data['category']['id'] =  $id;
                $this->load->view('modify_category', $data);
            } else {
                $data['name'] = $this->input->post('name');
                $data['id'] = $id;
                $query_result = $this->categories_model->edit_category($data);

                if(!$query_result) {
                    show_404('application/views/errors/html/error_404.php');
                    exit();
                }
                redirect('/categories/');

            }
        }
    }
}