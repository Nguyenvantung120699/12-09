<?php

namespace App\Repositories\Users;

use App\Repositories\EloquentRepository;

/**
 * Class UsersProfileRepository.
 */
class UsersProfileRepository extends EloquentRepository implements UsersProfileRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\UsersProfile::class;
    }
}
