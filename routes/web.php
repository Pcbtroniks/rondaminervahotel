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

Route::get('/', function () {return view('home.index');})->name('home');

Route::get('/rooms', function () {return view('rooms.index');})->name('rooms');

Route::get('/installations', function () {return view('installations.index');})->name('installations');

Route::get('/services', function () {return view('services.index');})->name('services');

Route::get('/contact', function () {return view('contact.index');})->name('contact');

Route::get('/recomended-rooms', function () {return view('recomended-rooms.index');})->name('recomended-rooms');
