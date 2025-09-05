<?php
namespace App\Controllers;

class PricingController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Pricing.php');
    }

}