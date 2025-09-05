<?php
namespace App\Controllers;

class ContactUsController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/ContactUs.php');
    }

}