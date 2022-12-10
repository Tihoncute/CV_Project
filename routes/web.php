<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UngvienController;
use App\Http\Controllers\NhaTDController;
use App\Http\Controllers\TuyendungController;
use App\Http\Controllers\VieclamController;
use App\Models\Vieclam;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/image',[ImageController::class,'index'])->name('image.index');
Route::post('/image',[ImageController::class,'store'])->name('image.store');

Route::get('/infoUV/create',[UngvienController::class,'create']);
Route::post('/infoUV/store',[UngvienController::class,'store']);

Route::get('/infoNTD/create',[NhaTDController::class,'create']);
Route::post('/infoNTD/store',[NhaTDController::class,'store']);

Route::get('/infoVL/create',[VieclamController::class,'create']);
Route::post('/infoVL/store',[VieclamController::class,'store']);

// Route::get('/',[VieclamController::class,'index']);
Route::get('/VLChitiet/{id}',[VieclamController::class,'show']);
Route::get('/infoVL/edit/{id}',[VieclamController::class,'edit']);
Route::patch('/infoVL/update/{id}',[VieclamController::class,'update']);
Route::delete('/infoVL/delete/{id}',[VieclamController::class,'destroy']);


Route::post('/infoTD/store',[HomeController::class,'store']);