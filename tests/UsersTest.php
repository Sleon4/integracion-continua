<?php 

namespace Tests;

use App\Model\Users;
use LionTest\Test;

class UsersTest extends Test
{
	const USERS_ID = 1;
	const USERS_NAME = 'root';
	const USERS_LAST_NAME = 'dev';

	private Users $users;

	protected function setUp(): void
	{
		$this->users = new Users();
	}

	public function testGetIdusers(): void
	{
		$this->users->setIdusers(self::USERS_ID);

		$this->assertSame(self::USERS_ID, $this->users->getIdusers());
	}

	public function testSetIdusers(): void
	{
		$this->assertInstanceOf(Users::class, $this->users->setIdusers(self::USERS_ID));

		$this->assertSame(self::USERS_ID, $this->users->getIdusers());
	}
}