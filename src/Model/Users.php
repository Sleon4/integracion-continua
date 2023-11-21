<?php 

declare(strict_types=1);

namespace App\Model;

class Users
{
	private ?int $idusers;
	private ?string $users_name;
	private ?string $users_last_name;


	/**
	 * @param $idusers   
	 * @param $users_name   
	 * @param $users_last_name   
	 */
	public function __construct(?int $idusers, ?string $users_name, ?string $users_last_name)
	{
		$this->idusers = $idusers;
		$this->users_name = $users_name;
		$this->users_last_name = $users_last_name;
	}

    /**
     * @return mixed
     */
    public function getIdusers(): ?int
    {
        return $this->idusers;
    }

    /**
     * @param mixed $idusers
     *
     * @return self
     */
    public function setIdusers(?int $idusers): Users
    {
        $this->idusers = $idusers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsersName(): ?string
    {
        return $this->users_name;
    }

    /**
     * @param mixed $users_name
     *
     * @return self
     */
    public function setUsersName(?string $users_name): Users
    {
        $this->users_name = $users_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsersLastName(): ?string
    {
        return $this->users_last_name;
    }

    /**
     * @param mixed $users_last_name
     *
     * @return self
     */
    public function setUsersLastName(?string $users_last_name): Users
    {
        $this->users_last_name = $users_last_name;

        return $this;
    }
}