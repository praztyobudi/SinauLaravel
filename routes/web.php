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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PegawaiController@index');
Route::get('/tambah', 'PegawaiController@tambah');
Route::post('/store', 'PegawaiController@store');
Route::get('/edit/{id}', 'PegawaiController@edit');
Route::put('/update/{id}', 'PegawaiController@update');
Route::get('/hapus/{id}', 'PegawaiController@delete');
