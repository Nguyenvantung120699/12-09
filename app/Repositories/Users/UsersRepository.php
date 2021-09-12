<?php

namespace App\Repositories\Users;

use App\Repositories\EloquentRepository;

/**
 * Class UsersRepository.
 */
class UsersRepository extends EloquentRepository implements UsersRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }

}
