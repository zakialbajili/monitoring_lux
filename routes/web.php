<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pasien/cek', 'App\Http\Controllers\DataController@tampilcek');
Route::get('/pasien/tampildata', 'App\Http\Controllers\DataController@tampildata');
Route::get('/pasien/tampilsuhu', 'App\Http\Controllers\DataController@tampilsuhu');
Route::get('/pasien/tampilgrafik', 'App\Http\Controllers\DataController@tampilgrafik');
Route::get('/inputdata/{lux}/{status}', 'App\Http\Controllers\DataController@inputdata');
Route::get('/admin/cek', 'App\Http\Controllers\SensorController@cek');
Route::get('/admin/tampilsensor', 'App\Http\Controllers\SensorController@tampilsensor');