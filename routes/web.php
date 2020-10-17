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

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('tipos', 'App\Http\Controllers\TiposController')->middleware('auth');
Route::resource('titulos', 'App\Http\Controllers\TitulosController')->middleware('auth');
Route::resource('leyes', 'App\Http\Controllers\LeyesController')->middleware('auth');
Route::resource('consultas', 'App\Http\Controllers\ConsultasController')->middleware('auth');

Auth::routes(['reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
