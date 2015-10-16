<?php

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

use App\Models\Equipment;
use App\Http\Controllers\EquipmentController;
/*
 * Front-end
 */

$app->get('/', function() use ($app){
    return view('index');
});


/*
 * API routing
 * Uses EquipmentController
 */
$app->get('/api/', function() use ($app) {
    return response()->json('Equipment API built with Lumen');
});
//list all equipment
$app->get('/api/equipment/', 'EquipmentController@index');
$app->get('/api/equipment/{id}', 'EquipmentController@getEquipment');
$app->post('/api/equipment/', 'EquipmentController@createEquipment');
$app->delete('/api/equipment/{id}', 'EquipmentController@deleteEquipment');
$app->put('/api/equipment/{id}', 'EquipmentController@updateEquipment');