<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

ApiRoute::version('v1', function ($api) {
    $api->get('users',          ['as' => 'users.list', 'uses' => 'App\Http\Controllers\UserController@list']);
    $api->get('users/{id}',     ['as' => 'users.show', 'uses' => 'App\Http\Controllers\UserController@show']);
    $api->post('users',         ['as' => 'users.store', 'uses' => 'App\Http\Controllers\UserController@store']);
    $api->put('users/{id}',     ['as' => 'users.edit', 'uses' => 'App\Http\Controllers\UserController@edit']);
    $api->delete('users/{id}',  ['as' => 'users.delete', 'uses' => 'App\Http\Controllers\UserController@delete']);
});