<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function index()
    {
        $this->load->model('categories');
        // $data['categories'] = $this->categories->get_categories();
        // $data['categories'] = "Hello";
        $this->load->view('categories', $data);
    }
}
