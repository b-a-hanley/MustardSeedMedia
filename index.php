<?php

// Autoload classes using Composer (assuming you have a PSR-4 autoloader set up)
require_once __DIR__ . '/vendor/autoload.php';
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
	case '/ben-hanley':
		$controller = new Controllers\OurTeamController();
		$controller->index();
		break;
	case '/premium':
		$controller = new Controllers\PremiumController();
		$controller->index();
		break;
	case '/starter':
		$controller = new Controllers\StarterController();
		$controller->index();
		break;
	case '/instructions':
		$controller = new Controllers\InstructionsController();
		$controller->index();
		break;
	//destination: methodist central hall
	case '/scavenger':
		$controller = new Controllers\ScavengerController();
		$controller->index();
		break;
	case '/clue':
		$controller = new Controllers\ClueController();
		$controller->index();
		break;
	//destination: guildhall
	case '/scavenger/spider':
		$controller = new Controllers\Scavenger1Controller();
		$controller->index();
		break;
	case '/clue/sock':
		$controller = new Controllers\Clue1Controller();
		$controller->index();
		break;
	//destination: derry clock tower
	case '/scavenger/blue':
		$controller = new Controllers\Scavenger2Controller();
		$controller->index();
		break;
	case '/clue/tape':
		$controller = new Controllers\Clue2Controller();
		$controller->index();
		break;
	//destination: norrington fountain
	case '/scavenger/tree':
		$controller = new Controllers\Scavenger3Controller();
		$controller->index();
		break;
	case '/clue/apricot':
		$controller = new Controllers\Clue3Controller();
		$controller->index();
		break;
	//destination: caffeine
	case '/scavenger/plastic':
		$controller = new Controllers\Scavenger4Controller();
		$controller->index();
		break;
	case '/clue/meme':
		$controller = new Controllers\Clue4Controller();
		$controller->index();
		break;
	case '/enterprise':
		$controller = new Controllers\EnterpriseController();
		$controller->index();
		break;
	case '/cv':
		$controller = new Controllers\CVController();
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
