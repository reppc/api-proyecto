<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Usuarios
Route::get('/usuarios','App\Http\Controllers\UsuariosController@index');
Route::post('/usuarios','App\Http\Controllers\UsuariosController@store');
Route::post('/usuarios/{id}','App\Http\Controllers\UsuariosController@update');
Route::delete('/usuarios/{id}','App\Http\Controllers\UsuariosController@destroy');
//Sensor
Route::get('/sensor','App\Http\Controllers\SensorController@index');
Route::post('/sensor','App\Http\Controllers\SensorController@store');
Route::post('/sensor/{id}','App\Http\Controllers\SensorController@update');
Route::delete('/sensor/{id}','App\Http\Controllers\SensorController@destroy');

//Historial
Route::get('/historial','App\Http\Controllers\HistorialController@index');
Route::post('/historial','App\Http\Controllers\HistorialController@store');
Route::post('/historial/{id}','App\Http\Controllers\HistorialController@update');
Route::delete('/historial/{id}','App\Http\Controllers\HistorialController@destroy');

//Soporte
Route::get('/soporte','App\Http\Controllers\SoporteController@index');
Route::post('/soporte','App\Http\Controllers\SoporteController@store');
Route::post('/soporte/{id}','App\Http\Controllers\SoporteController@update');
Route::delete('/soporte/{id}','App\Http\Controllers\SoporteController@destroy');
