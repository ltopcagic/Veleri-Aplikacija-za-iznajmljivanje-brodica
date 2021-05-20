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
Route::get('/pregledbrodica/brisanje/{brodica}/', [App\Http\Controllers\BrodicaController::class, 'destroy']);


//Servisi rute

Route::get('/pregledservisa', [App\Http\Controllers\SevisiController::class, 'index']);
Route::get('/noviservis/create', [App\Http\Controllers\SevisiController::class, 'create']);
Route::post('/noviservis', [App\Http\Controllers\SevisiController::class, 'store']);
Route::get('/pregledservisa/brisanje/{servis}', [App\Http\Controllers\SevisiController::class, 'destroy']);



//Čišćenja rute

Route::get('/pregledciscenja', [App\Http\Controllers\CiscenjaController::class, 'index']);
Route::get('/novociscenje/create', [App\Http\Controllers\CiscenjaController::class, 'create']);
Route::post('/novociscenje', [App\Http\Controllers\CiscenjaController::class, 'store']);
Route::get('/pregledciscenja/brisanje/{ciscenje}', [App\Http\Controllers\CiscenjaController::class, 'destroy']);

//Iznajmljivanje brodice

Route::get('/preglediznajmljenihbrodica', [App\Http\Controllers\IznajmljenaBrodicaController::class, 'index']);
Route::get('/iznajmljivanjebrodice/{brodica}/', [App\Http\Controllers\IznajmljenaBrodicaController::class, 'create']);
Route::post('/iznajmljivanjebrodice/{brodica}/', [App\Http\Controllers\IznajmljenaBrodicaController::class, 'store']);
Route::get('/preglediznajmljenihbrodica/brisanje/{iznajmljenabrodica}', [App\Http\Controllers\IznajmljenaBrodicaController::class, 'destroy']);
