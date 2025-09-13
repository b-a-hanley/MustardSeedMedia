<?php
namespace App\Controllers;

class FixesController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Fixes.php');
    }

}