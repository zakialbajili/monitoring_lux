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
Route::get('/inputdata/{lux}/{status}', 'App\Http\Controllers\SensorController@inputdata');
Route::get('/admin', 'App\Http\Controllers\SensorController@tampilsensor');
Route::get('/admin/cobagrafik', 'App\Http\Controllers\SensorController@cobagrafik');
Route::get('/admin/tampildata', 'App\Http\Controllers\SensorController@tampildata');
Route::get('/admin/rekapdata', 'App\Http\Controllers\SensorController@rekapdata');
Route::get('/admin/rekapdata', 'App\Http\Controllers\SensorController@rekapdata');