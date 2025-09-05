<?php
namespace App\Controllers;

class OurTeamController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/OurTeam.php');
    }

}