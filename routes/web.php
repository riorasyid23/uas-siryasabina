<?php

use App\BarangController;
use Illuminate\Support\Facades\Route;
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

$router->get('/barang', 'BarangController@index');
$router->get('/barang/{id}', 'BarangController@show');
$router->post('/barang', 'BarangController@create');
$router->put('/barang/{id}', 'BarangController@update');
$router->delete('/barang/{id}', 'BarangController@delete');