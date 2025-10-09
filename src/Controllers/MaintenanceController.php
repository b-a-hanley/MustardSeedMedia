<?php
namespace App\Controllers;

class MaintenanceController {

	public function __construct() {}

	public function index() {
        require_once('src/Views/Maintenance.php');
    }

}