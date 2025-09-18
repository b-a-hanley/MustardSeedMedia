<?php
namespace App\Controllers;

class StarterController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Starter.php');
    }

}