<?php

namespace App\Repositories\PaymentMethod;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class PaymentMethodRepository.
 */
class PaymentMethodRepository  extends EloquentRepository implements PaymentMethodRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\PaymentMethod::class;
    }
}
