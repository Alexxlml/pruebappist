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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/teclado', function () {
    return view('teclado/tecladoNumerico');
})->name('teclado');

Route::middleware(['auth:sanctum', 'verified'])->get('/tictactoe', function () {
    return view('tictactoe/tictactoe');
})->name('tictactoe');

Route::middleware(['auth:sanctum', 'verified'])->get('/autocompletar', function () {
    return view('autocompletar/autocompletarNombre');
})->name('autocompletar');