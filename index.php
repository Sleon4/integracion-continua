<?php 

require_once('./vendor/autoload.php');

header('Content-Type: application/json');

use App\Controller\IndexController;
use LionDatabase\Driver;
use LionRequest\Request;

$res = Driver::run([
	'default' => 'integracion_continua',
	'connections' => [
		'integracion_continua' => [
			'type' => 'mysql',
			'host' => 'db',
			'port' => 3306,
			'dbname' => 'integracion_continua',
			'user' => 'root',
			'password' => 'lion'
		],
	]
]);

if ($res->message === 'database-error') {
	die(json_encode($res));
}

if (empty($_GET['proccess'])) {
	die(json_encode([
		'status' => 'error',
		'message' => 'proccess not defined [1]'
	]));
}

define('request', (new Request())->capture());
$indexController = new IndexController();

switch ($_GET['proccess']) {
	case 'create':
		die(json_encode($indexController->createUsers()));
		break;

	case 'read':
		die(json_encode($indexController->readUsers()));
		break;
	
	default:
		die(json_encode([
			'status' => 'error',
			'message' => 'proccess not defined [2]'
		]));
		break;
}