<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosPreController;

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

## Routes Guest Index
Route::post('/guests',[DatosPreController::class, 'viewGuest'])->name('guest-index');
Route::get('/', function () {
    return view('guests.juridico');
});
Route::get('/', function () {
    return view('guests.index');
});
/*post porque voy a enviar a la DB*/


/* Exist Ruta? */
	Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
/* Language Translation */
	Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
