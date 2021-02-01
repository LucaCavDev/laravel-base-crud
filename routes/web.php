<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'DeviceController@index') 
    -> name('devices-index');

Route::get('/device/{id}', 'DeviceController@show') 
    -> name('device-show');

Route::get('/new/device', 'DeviceController@create') 
    -> name('device-create');
    
Route::post('/new/device/store', 'DeviceController@store') 
    -> name('device-store');