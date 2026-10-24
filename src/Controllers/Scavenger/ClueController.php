<?php
namespace App\Controllers\Scavenger;

class ClueController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Scavenger/Clue.php');
    }

}