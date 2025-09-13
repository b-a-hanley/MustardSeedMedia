<?php
namespace App\Controllers;

class CVController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/CV.php');
    }

}