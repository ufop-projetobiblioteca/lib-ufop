<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\ReservaController;

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
    return view('home');
})->name('home');

Route::resource('/livros', LivroController::class);
Route::resource('/usuarios', UserController::class);
Route::resource('/emprestimos', EmprestimoController::class);
Route::resource('/reservas', ReservaController::class);
