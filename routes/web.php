<?php

use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
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

Route::get('/datasiswa', [siswaController::class,'index']);
Route::get('/detailsiswa/l', [siswaController::class,'select_where1']);
Route::get('/detailsiswa/p', [siswaController::class,'select_where2']);
Route::get('/dataguru', [guruController::class,'index']);
Route::get('/nilai', [siswaController::class,'nilai']);
Route::get('/nilai/lulus', [siswaController::class,'nilailulus']);