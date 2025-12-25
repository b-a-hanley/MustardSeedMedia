<?php
namespace App\Controllers\Christmas;

class ChristmasController {

    public function index($name = "") {
        ucfirst($name);
        require_once('src/Views/Christmas/Christmas.php');
    }
}
