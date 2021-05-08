<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Brodice rute
Route::get('/pregledbrodica', [App\Http\Controllers\BrodicaController::class, 'index']);
Route::get('/novabrodica/create', [App\Http\Controllers\BrodicaController::class, 'create']);
Route::post('/novabrodica', [App\Http\Controllers\BrodicaController::class, 'store']);
Route::put('/pregledbrodica/{brodica}/', [App\Http\Controllers\BrodicaController::class, 'update']);
Route::get('/pregledbrodica/{brodica}/izmjenabrodice', [App\Http\Controllers\BrodicaController::class, 'edit']);
Route::delete('/pregledbrodica/{brodica}/', [App\Http\Controllers\BrodicaController::class, 'destroy']);


//Servisi rute

Route::get('/pregledservisa', [App\Http\Controllers\SevisiController::class, 'index']);

