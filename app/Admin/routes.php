<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('records', 'RecordController@index');
    $router->get('records/create', 'RecordController@create');
    $router->post('records', 'RecordController@store');
    $router->post('records', 'RecordController@store');

    $router->get('records/{id}/edit', 'RecordController@edit');
    $router->put('records/{id}', 'RecordController@update');

    $router->delete('records/{id}', 'RecordController@destroy');
//    $router->get('products', 'ProductsController@index');
});
