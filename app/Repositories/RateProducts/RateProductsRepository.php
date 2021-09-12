<?php

namespace App\Repositories\RateProducts;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class RateProductsRepository.
 */
class RateProductsRepository extends EloquentRepository implements RateProductsRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
   public function getModel()
    {
        return \App\Models\RateProducts::class;
    }
}
