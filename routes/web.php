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

#produk
$router->get('produk/read',['uses'=> 'ProdukController@showAll']);
$router->get('produk/read/{id}',['uses'=> 'ProdukController@showOne']);
$router->post('produk/create',['uses'=> 'ProdukController@create']);
$router->delete('produk/delete/{id}',['uses'=> 'ProdukController@delete']);
$router->put('produk/update/{id}',['uses'=> 'ProdukController@update']);

#kategori
$router->get('kategori/read',['uses'=> 'KategoriController@showAll']);
$router->get('kategori/read/{id}',['uses'=> 'KategoriController@showOne']);
$router->post('kategori/create',['uses'=> 'KategoriController@create']);
$router->delete('kategori/delete/{id}',['uses'=> 'KategoriController@delete']);
$router->put('kategori/update/{id}',['uses'=> 'KategoriController@update'] );

#Pelanggan
$router->get('pelanggan/read',['uses'=> 'PelangganController@showAll']);
$router->get('pelanggan/read/{id}',['uses'=> 'PelangganController@showOne']);
$router->post('pelanggan/create',['uses'=> 'PelangganController@create']);
$router->delete('pelanggan/delete/{id}',['uses'=> 'PelangganController@delete']);
$router->put('pelanggan/update/{id}',['uses'=> 'PelangganController@update'] );

#jwt-auth
$router->post('login',['uses'=> 'AuthController@login']);
$router->post('logout',['uses'=> 'AuthController@logout']);
$router->post('refresh',['uses'=> 'AuthController@refresh']);
$router->post('user-profile',['uses'=> 'AuthController@me']);


