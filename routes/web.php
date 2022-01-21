<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\UsuarioController;

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
    return view('login');
});

Route::get("centros", [CentroController::class, "index"]);


Route::get("usuarios", [UsuarioController::class, "index"]);

Route::get("asistencias", [AsistenciaController::class, "index"]);



Route::get('/usuario', function () {
    return view('usuario');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/admin', function () {
    return view('administrador');
});
Route::get('/sede', function () {
    return view('sede');
});