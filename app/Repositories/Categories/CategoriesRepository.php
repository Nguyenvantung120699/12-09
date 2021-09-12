<?php

namespace App\Repositories\Categories;

use App\Repositories\EloquentRepository;
// use App\Repositories\Categories\CategoriesRepositoryInterface;

/**
 * Class CategoriesRepository.
 */
class CategoriesRepository extends EloquentRepository implements CategoriesRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\Categories::class;
    }

    // public function getCategory()
    // {
    //     return $this->model->select('name')->take(5)->get();
    // }
}
