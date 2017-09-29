<?php

require_once __DIR__.'/model.php';
require_once __DIR__.'/view.php';
require_once __DIR__.'/controller.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($model);
$action = $_GET['action'];

switch ($action) {
	case 'clicked':
		$controller->click();
		break;
	
	default:
		
		break;
}

echo $view->output();