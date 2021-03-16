<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('categories', CategoriesController::class);
    $router->resource('sub-categories', SubCategoriesController::class);
    $router->resource('products', ProductsController::class);
    $router->resource('packages', PackagesController::class);
    $router->resource('messages', MessagesController::class);
    $router->resource('fwords', FwordsController::class);

});
