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
    return view('home.index');
})->name('home');

Route::get('illustrazioni.index', function () {
    return view('illustrazioni.index');
})->name('illustrazioni');

Route::get('shop.index', function () {
    return view('shop.index');
})->name('shop');

Route::get('chi_sono.index', function () {
    return view('chi_sono.index');
})->name('chi_sono');

Route::get('contatti.index', function () {
    return view('contatti.index');
})->name('contatti');