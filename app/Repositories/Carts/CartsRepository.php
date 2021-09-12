<?php

namespace App\Repositories\Carts;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class CartsRepository.
 */
class CartsRepository extends EloquentRepository implements CartsRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\Carts::class;
    }
}
