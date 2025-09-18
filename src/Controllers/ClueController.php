<?php
namespace App\Controllers;

class ClueController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Clue.php');
    }

}