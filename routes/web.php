<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\AuthController;

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
Route::get('/register',[AuthController::class,'getRegister'])->name('register')->middleware('guest');
Route::post('/register',[AuthController::class,'postRegister'])->middleware('guest');
Route::get('/',[AuthController::class,'getLogin'])->middleware('guest')->name('login');
Route::post('/',[AuthController::class,'postLogin'])->middleware('guest');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/home','App\Http\Controllers\tema@viewnama')->middleware('auth')->name('/home');
Route::get('/pemain',[PemainController::class,'index']);
Route::get('/pemain/create',[PemainController::class,'create']);
Route::post('pemain/',[PemainController::class,'store']);
Route::get('pemain/{id}',[PemainController::class,'edit']);
Route::put('pemain/{id}',[PemainController::class,'update']);
Route::get('pemain/delete/{id}',[PemainController::class,'destroy']);
Route::delete('pemain/{id}',[PemainController::class,'destroy']);