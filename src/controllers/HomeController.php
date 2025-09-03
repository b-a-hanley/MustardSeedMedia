<?php
namespace App\Controllers;

class HomeController {

	public function __construct() {}

	public function index() {
        require_once('src/views/home.php');
    }

}