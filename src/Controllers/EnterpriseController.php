<?php
namespace App\Controllers;

class EnterpriseController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Enterprise.php');
    }

}