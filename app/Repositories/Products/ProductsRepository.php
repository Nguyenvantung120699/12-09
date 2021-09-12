<?php

namespace App\Repositories\Products;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class ProductsRepository.
 */
class ProductsRepository extends EloquentRepository implements ProductsRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\Products::class;
    }

}
