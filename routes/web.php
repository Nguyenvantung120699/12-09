<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix("admin")->middleware(['auth',"check_admin"])->group(function (){
    include_once("admin.php");
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/create', [App\Http\Controllers\Admin\CategoriesController::class, 'create']);
