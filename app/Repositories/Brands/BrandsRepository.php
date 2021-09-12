<?php

namespace App\Repositories\Brands;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class BrandsRepository.
 */
class BrandsRepository extends EloquentRepository implements BrandsRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
     public function getModel()
    {
        return \App\Models\Brands::class;
    }


}
