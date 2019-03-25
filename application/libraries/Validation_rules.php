<?php
defined('BASEPATH') OR exit('No direct script access allowed');

namespace Validation;

class ValidationRules {
    public static function add_article() {
        return array(
            array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required|min_length[2]|max_length[255]'
            ),
            array(
                'field' => 'text',
                'label' => 'Article content',
                'rules' => 'required|min_length[2]|max_length[16777215]'
            )
        );
    }
}