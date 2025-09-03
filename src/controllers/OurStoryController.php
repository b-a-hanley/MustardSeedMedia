<?php
namespace App\Controllers;

class OurStoryController {

	public function __construct() {}

	public function index() {
        require_once('src/views/OurStory.php');
    }

}