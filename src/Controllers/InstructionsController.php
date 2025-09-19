<?php
namespace App\Controllers;

class InstructionsController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Instructions.php');
    }

}