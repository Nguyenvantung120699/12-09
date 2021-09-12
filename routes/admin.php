<?php
Route::get('/admin-dashboard', [App\Http\Controllers\HomeController::class, 'admin_index']);

Route::get('category/list',[App\Http\Controllers\Admin\CategoriesController::class, 'index']);
Route::get('category/create',[App\Http\Controllers\Admin\CategoriesController::class, 'create']);
Route::post('category/store',[App\Http\Controllers\Admin\CategoriesController::class, 'store']);
Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoriesController::class, 'edit']);
Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoriesController::class, 'update']);
Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoriesController::class, 'destroy']);
Route::get('category/detail/{id}',[App\Http\Controllers\Admin\CategoriesController::class, 'show']);


Route::get('brand/list',[App\Http\Controllers\Admin\BrandsController::class, 'index']);
Route::get('brand/create',[App\Http\Controllers\Admin\BrandsController::class, 'create']);
Route::post('brand/store',[App\Http\Controllers\Admin\BrandsController::class, 'store']);
Route::get('brand/edit/{id}',[App\Http\Controllers\Admin\BrandsController::class, 'edit']);
Route::post('brand/update/{id}',[App\Http\Controllers\Admin\BrandsController::class, 'update']);
Route::get('brand/delete/{id}',[App\Http\Controllers\Admin\BrandsController::class, 'destroy']);
Route::get('brand/detail/{id}',[App\Http\Controllers\Admin\BrandsController::class, 'show']);

Route::get('products/list',[App\Http\Controllers\Admin\ProductsController::class, 'index']);
Route::get('products/create',[App\Http\Controllers\Admin\ProductsController::class, 'create']);
Route::post('products/store',[App\Http\Controllers\Admin\ProductsController::class, 'store']);
Route::get('products/edit/{id}',[App\Http\Controllers\Admin\ProductsController::class, 'edit']);
Route::post('products/update/{id}',[App\Http\Controllers\Admin\ProductsController::class, 'update']);
Route::get('products/delete/{id}',[App\Http\Controllers\Admin\ProductsController::class, 'destroy']);
Route::get('products/detail/{id}',[App\Http\Controllers\Admin\ProductsController::class, 'show']);

Route::get('productattribute/list',[App\Http\Controllers\Admin\ProductsAttributeController::class, 'index']);
Route::get('productattribute/create',[App\Http\Controllers\Admin\ProductsAttributeController::class, 'create']);
Route::post('productattribute/store',[App\Http\Controllers\Admin\ProductsAttributeController::class, 'store']);
Route::get('productattribute/edit/{id}',[App\Http\Controllers\Admin\ProductsAttributeController::class, 'edit']);
Route::post('productattribute/update/{id}',[App\Http\Controllers\Admin\ProductsAttributeController::class, 'update']);
Route::get('productattribute/delete/{id}',[App\Http\Controllers\Admin\ProductsAttributeController::class, 'destroy']);
Route::get('productattribute/detail/{id}',[App\Http\Controllers\Admin\ProductsAttributeController::class, 'show']);


