<?php 

declare(strict_types=1);

namespace App\Controller;

use App\Model\IndexModel;
use App\Model\Users;

class IndexController
{
	private IndexModel $indexModel;

	public function __construct()
	{
		$this->indexModel = new IndexModel();	
	}

	public function createUsers(): object
	{
		return $this->indexModel->createUsersDB(
			new Users(null, request->users_name, request->users_last_name)
		);
	}

	public function readUsers(): array|object
	{
		return $this->indexModel->readUsersDB();
	}
}