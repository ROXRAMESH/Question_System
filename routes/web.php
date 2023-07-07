<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/quotation/add', [App\Http\Controllers\PageController::class, 'addQuote'])->name('addQuote');

Route::get('/quotation', [App\Http\Controllers\PageController::class, 'listQuote'])->name('quote');

Route::post('/quotation/store', [App\Http\Controllers\PageController::class, 'saveOrder'])->name('saveOrder');
