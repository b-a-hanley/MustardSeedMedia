<?php

// Autoload classes using Composer (assuming you have a PSR-4 autoloader set up)
require_once __DIR__ . '/../vendor/autoload.php';
// Namespace declaration

use App\Controllers;
use App\Routes;

$request_uri = $_SERVER['REQUEST_URI'];
$base_uri = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$uri = substr($request_uri, strlen($base_uri));

switch ($uri) {
	case '/':
		$controller = new Controllers\HomeController();
		$controller->index();
		break;
	case '/index.php':
		$controller = new Controllers\HomeController();
		$controller->index();
		break;
	case '/index':
		$controller = new Controllers\HomeController();
		$controller->index();
		break;
	case '/our-story':
		$controller = new Controllers\OurStoryController();
		$controller->index();
		break;
	case '/ben-hanley':
		$controller = new Controllers\OurTeamController();
		$controller->index();
		break;
	case '/pricing':
		$controller = new Controllers\PricingController();
		$controller->index();
		break;
	case '/contact-us':
		$controller = new Controllers\ContactUsController();
		$controller->index();
		break;
	default:
		$controller = new Controllers\ErrorController();
		$controller->index();
		break;
}
