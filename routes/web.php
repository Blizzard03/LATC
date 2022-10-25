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

Route::get('/', 'LatController@welcome');
// Route untuk layout menggunakan cara include
Route::get('/pertamina', 'LatController@pertamina');
Route::get('/shell', 'LatController@shell');
Route::get('/vivo', 'LatController@vivo');
// Route untuk layout menggunakan cara extend
Route::get('/pertamina2', 'LatController@pertamina2');
Route::get('/shell2', 'LatController@shell2');
Route::get('/vivo2', 'LatController@vivo2');
