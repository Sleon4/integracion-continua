<?php 

require_once('./vendor/autoload.php');

header('Content-Type: application/json');

use LionDatabase\Driver;
use LionDatabase\Drivers\MySQL\MySQL as DB;

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

$create = DB::table('users')->insert([
	'users_name' => 'Sergio',
	'users_last_name' => 'Leon'
])->execute();

die(json_encode($create));