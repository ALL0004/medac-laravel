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

Route::get('/prueba', function () {
    return view('index');
});
Route::get('/usuario', function () {
    return view('usuario');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/resources/views', function () {
    return view('vista2');
});

Route::get('/admin', function () {
    return view('administrador');
});

Route::get('/sede', function () {
    return view('sede');
});