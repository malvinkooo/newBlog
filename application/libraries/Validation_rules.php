<?php
defined('BASEPATH') OR exit('No direct script access allowed');

namespace Validation;

class ValidationRules {
    public static function add_article() {
        return [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required|min_length[2]|max_length[255]'
            ],
            [
                'field' => 'text',
                'label' => 'Article content',
                'rules' => 'required|min_length[2]|max_length[16777215]'
            ]
        ];
    }

    public static function modify_category() {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|min_length[2]|max_length[255]'
            ]
        ];
    }
}