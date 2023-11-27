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


//route regulasi
$router->group(['prefix' => 'regulation'], function () use ($router) {
    $router->post('/default', ['uses' => 'RegulasiCont@defaultRegulation']);
    $router->post('/new', ['uses' => 'RegulasiCont@createRegulation']);
    $router->get('/all', ['uses' => 'RegulasiCont@getRegulation']);
});


$router->group(['prefix' => '/api/maintenances'], function () use ($router) {
    $router->get('/', ['uses' => 'MaintenanceController@getAllMaintenances']);
    $router->get('/{id}', ['uses' => 'MaintenanceController@getMaintenanceById']);
    $router->post('/', ['uses' => 'MaintenanceController@createMaintenance']);
    $router->put('/{id}', ['uses' => 'MaintenanceController@updateMaintenance']);
    $router->delete('/{id}', ['uses' => 'MaintenanceController@deleteMaintenance']);
});

// route finance report
$router->group(['prefix' => '/financereport'], function () use ($router) {
    $router->get('/', ['uses' => 'FinanceReportCont@getAllReport']);
    $router->get('/{id}', ['uses' => 'FinanceReportCont@getReportById']);
    $router->post('/', ['uses' => 'FinanceReportCont@createReport']);
    $router->put('/{id}', ['uses' => 'FinanceReportCont@updateReport']);
    $router->delete('/{id}', ['uses' => 'FinanceReportCont@deleteReport']);
    $router->get('/jumlah', ['uses' => 'FinanceReportCont@hitung_laba']);
});

//route financial acc
$router->group(['prefix' => '/api/financialaccount'], function () use ($router) {
    $router->get('/', ['uses' => 'FinancialAccountController@getAllAccount']);
    $router->get('/{id}', ['uses' => 'FinancialAccountController@getAccountById']);
    $router->post('/', ['uses' => 'FinancialAccountController@createAccount']);
    $router->put('/{id}', ['uses' => 'FinancialAccountController@updateAccount']);
    $router->delete('/{id}', ['uses' => 'FinancialAccountController@deleteAccount']);
});



$router->get('/key', function () {
    return Str::random(32);
});

$router->get('/', ['uses' => 'prodController@awal']);
