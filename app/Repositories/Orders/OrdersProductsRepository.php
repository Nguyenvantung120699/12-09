<?php

namespace App\Repositories\Orders;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class OrdersProductsRepository.
 */
class OrdersProductsRepository extends EloquentRepository implements OrdersProductsRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
     public function getModel()
    {
        return \App\Models\OrderProduct::class;
    }
}
