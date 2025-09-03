<?php
namespace App\Controllers;

class ErrorController {

	public function __construct() {}

	public function index() {
        require_once('src/views/Error.php');
    }

}