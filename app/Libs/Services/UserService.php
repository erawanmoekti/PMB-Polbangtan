<?php

namespace App\Libs\Services;

use App\User;
use App\Libs\Contracts\UserContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserService implements UserContract
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * [createUser]
     * @param  array  $data
     * @return User
     */
    public function createUser(array $data) : User
    {
    	return $this->model->createUser($data);
    }

    /**
     * [getUserByEmail]
     * @param  String $email
     */
    public function getUserByEmail(String $email) : ?User
    {
    	return $this->model->whereEmail($email)->first();
    }

    /**
     * [searchUser]
     * @param  array  $filter
     * @return Collection : null
     */
    public function searchUser(array $filter) : ?Collection
    {
    	return $this->model->querySearch($filter);
    }

    /**
     * [updateUser]
     * @param  int    $id
     * @param  array  $data
     * @return User
     */
    public function updateUser(int $id, array $data) : User
    {
    	return $this->model->updateUser($id, $data);
    }
}