<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/biodata', [BiodataController::class,'index']);
Route::get('/biodata/create', [BiodataController::class,'create']);
Route::post('/biodata/store', [BiodataController::class,'store']);
Route::get('/biodata/edit/{id}', [BiodataController::class,'edit']);
Route::put('/biodata/update/{id}', [BiodataController::class,'update']);
Route::get('/biodata/hapus/{id}', [BiodataController::class,'destroy']);
// Route::resource('/biodata', BiodataController::class);

