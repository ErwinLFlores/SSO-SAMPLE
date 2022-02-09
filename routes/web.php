<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('login/microsoft', ['as' => 'microsoftLogin', 'uses' => 'LoginController@microsoft']);
$router->get('login/microsoft/callback', ['as' => 'microsoftLogin', 'uses' => 'LoginController@microsoftcallback']);

$router->get('login/google', ['as' => 'microsoftLogin', 'uses' => 'LoginController@google']);
$router->get('login/google/callback', ['as' => 'microsoftLogin', 'uses' => 'LoginController@googlecallback']);
