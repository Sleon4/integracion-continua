<?php 

declare(strict_types=1);

namespace App\Model;

use App\Model\Users;
use LionDatabase\Drivers\MySQL\MySQL as DB;

class IndexModel
{
	public function createUsersDB(Users $users): object
	{
		return DB::table('users')->insert([
			'users_name' => $users->getUsersName(),
			'users_last_name' => $users->getUsersLastName()
		])->execute();
	}

	public function readUsersDB(): array|object
	{
		return DB::table('users')->select()->getAll();
	}
}