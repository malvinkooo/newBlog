<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validator {

    public function is_category_name_valid($categoryName)
    {
        if(is_string($categoryName) && !empty($categoryName) && iconv_strlen($categoryName) <= 255) {
            return true;
        } else
        {
            throw new ValidateException("not valid", 400);
        }
    }
}
