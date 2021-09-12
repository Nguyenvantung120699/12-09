<?php

namespace App\Repositories\Orders;

use App\Repositories\EloquentRepository;

//use Your Model

/**
 * Class OrdersRepository.
 */
class OrdersRepository  extends EloquentRepository implements OrdersRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
     public function getModel()
    {
        return \App\Models\Order::class;
    }
}
