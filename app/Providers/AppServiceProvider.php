<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Brands\BrandsRepositoryInterface::class,
            \App\Repositories\Brands\BrandsRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Categories\CategoriesRepositoryInterface::class,
            \App\Repositories\Categories\CategoriesRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Carts\CartsRepositoryInterface::class,
            \App\Repositories\Carts\CartsRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Orders\OrdersProductsRepositoryInterface::class,
            \App\Repositories\Orders\OrdersProductsRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Orders\OrdersRepositoryInterface::class,
            \App\Repositories\Orders\OrdersRepository::class,
        );
        $this->app->singleton(
           \App\Repositories\PaymentMethod\PaymentMethodRepositoryInterface::class,
            \App\Repositories\PaymentMethod\PaymentMethodRepository::class,
        );
        $this->app->singleton(
           \App\Repositories\Products\ProductsRepositoryInterface::class,
            \App\Repositories\Products\ProductsRepository::class,
        );
        $this->app->singleton(
           \App\Repositories\Products\ProductAttributeRepositoryInterface::class,
            \App\Repositories\Products\ProductAttributeRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\RateProducts\RateProductsRepositoryInterface::class,
            \App\Repositories\RateProducts\RateProductsRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\ValueAttributes\ValueAttributesRepositoryInterface::class,
            \App\Repositories\ValueAttributes\ValueAttributesProductsRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Users\UsersRepositoryInterface::class,
            \App\Repositories\Users\UsersProductsRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Users\UsersProfileAttributeRepositoryInterface::class,
            \App\Repositories\Users\UsersProfileAttributeRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
