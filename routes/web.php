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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/crud', [App\Http\Controllers\HomeController::class, 'crud'])->name('crud');
Route::post('/insert', [App\Http\Controllers\HomeController::class, 'insert'])->name('insert');
Route::get('/hello', [\App\Http\Controllers\HomeController::class, 'hello'])->name('hello');

Route::delete('delete', [\App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');

Route::get('get', [\App\Http\Controllers\HomeController::class, 'get'])->name('get');

Route::put('/put', [\App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
