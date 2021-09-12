<?php

namespace App\Repositories\Products;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class ProductAttributeRepository.
 */
class ProductAttributeRepository extends EloquentRepository implements ProductAttributeRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
     public function getModel()
    {
        return \App\Models\ProductsAttribute::class;
    }

}
