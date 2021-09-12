<?php

namespace App\Repositories\ValueAttributes;

use App\Repositories\EloquentRepository;
//use Your Model

/**
 * Class ShiperRepository.
 */
class ValueAttributesRepository extends EloquentRepository implements ValueAttributesRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
   public function getModel()
    {
        return \App\Models\ValueAttributes::class;
    }
}
