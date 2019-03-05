<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBException extends Exception {

    function __construct($message, $code) {
        parent::__construct($message, $code);
    }

}

class ValidateException extends Exception {

    function __construct($message, $code) {
        parent::__construct($message, $code);
    }

}

class NotFoundException extends Exception {

    function __construct($message, $code) {
        parent::__construct($message, $code);
    }

}