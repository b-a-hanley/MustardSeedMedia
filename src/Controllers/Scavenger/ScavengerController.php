<?php
namespace App\Controllers;

class ScavengerController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Scavenger.php');
    }

}