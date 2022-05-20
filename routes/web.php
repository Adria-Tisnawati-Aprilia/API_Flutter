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

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('arena', ['uses' => 'ArenaController@showAllArena']);

    $router->get('arena/{id}', ['uses' => 'ArenaController@showOneArenas']);

    $router->post('arena', ['uses' => 'ArenaController@create']);

    $router->delete('arena/{id}', ['uses' => 'ArenaController@delete']);

    $router->put('arena/{id}', ['uses' => 'ArenaController@update']);
/*});

$router->group(['prefix' => 'api'], function () use ($router) {*/

    $router->get('lapangan', ['uses' => 'LapanganController@showAllLapangan']);

    $router->get('lapangan/{id}', ['uses' => 'LapanganController@showOneLapangan']);

    $router->post('lapangan', ['uses' => 'LapanganController@create']);

    $router->delete('lapangan/{id}', ['uses' => 'LapanganController@delete']);

    $router->put('lapangan/{id}', ['uses' => 'LapanganController@update']);
/*});

$router->group(['prefix' => 'api'], function () use ($router) {*/

    $router->get('event', ['uses' => 'EventController@showAllEvent']);

    $router->get('event/{id}', ['uses' => 'EventController@showOneEvent']);

    $router->post('event', ['uses' => 'EventController@create']);

    $router->delete('event/{id}', ['uses' => 'EventController@delete']);

    $router->put('event/{id}', ['uses' => 'EventController@update']);
/*});

$router->group(['prefix' => 'api'], function () use ($router) {*/

    $router->get('jadwal', ['uses' => 'JadwalController@showAllEvent']);

    $router->get('jadwal/{id}', ['uses' => 'JadwalController@showOneEvent']);

    $router->post('jadwal', ['uses' => 'JadwalController@create']);

    $router->delete('jadwal/{id}', ['uses' => 'JadwalController@delete']);

    $router->put('jadwal/{id}', ['uses' => 'JadwalController@update']);
/*});

$router->group(['prefix' => 'api'], function () use ($router) {*/

    $router->get('booking', ['uses' => 'BookingController@showAllEvent']);

    $router->get('booking/{id}', ['uses' => 'BookingController@showOneEvent']);

    $router->post('booking', ['uses' => 'BookingController@create']);

    $router->delete('booking/{id}', ['uses' => 'BookingController@delete']);

    $router->put('booking/{id}', ['uses' => 'BookingController@update']);
/*});

$router->group(['prefix' => 'api'], function () use ($router) {*/

    $router->get('transaksi', ['uses' => 'TransaksiController@showAllEvent']);

    $router->get('transaksi/{id}', ['uses' => 'TransaksiController@showOneEvent']);

    $router->post('transaksi', ['uses' => 'TransaksiController@create']);

    $router->delete('transaksi/{id}', ['uses' => 'TransaksiController@delete']);

    $router->put('transaksi/{id}', ['uses' => 'TransaksiController@update']);
    });

$router->post("login", ["uses" => "LoginController@showAllLogin"]);
