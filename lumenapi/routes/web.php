<?php

use Illuminate\Support\Str;

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

$router->get('/', ['uses' => 'prodController@index']);

$router->get('/get', function () {
    return 'GET';
});

$router->post('/post', function () {
    return 'POST';
});
$router->put('/put', function () {
    return 'PUT';
});
$router->delete('/delete', function () {
    return 'DELETE';
});


$router->get('/awal', ['uses' => 'prodController@awal']); 

// Tiga Route prod
$router->group(['prefix' => 'dataProduction'], function () use ($router) {
$router->post('/default', ['uses' => 'prodController@defaultProduction']);
$router->post('/new', ['uses' => 'prodController@createDataProduction']);
$router->get('/all', ['uses' => 'prodController@getDataProduction']);
});

$router->group(['prefix' => '/api/maintenances'], function () use ($router) {
    $router->get('/', ['uses' => 'MaintenanceController@getAllMaintenances']);
    $router->get('/{id}', ['uses'=> 'MaintenanceController@getMaintenanceById']);
    $router->post('/', ['uses'=> 'MaintenanceController@createMaintenance']);
    $router->put('/{id}', ['uses'=> 'MaintenanceController@updateMaintenance']);
    $router->delete('/{id}', ['uses'=> 'MaintenanceController@deleteMaintenance']);
});

$router->get('/key', function () {
    return Str::random(32);
});



