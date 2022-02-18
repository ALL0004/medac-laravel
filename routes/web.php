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




/* ------------------------ Funciones de administrador ------------------------------*/


/**
 * Vista general de todos los centros de la aplicación
 */
Route::get("centros", [CentroController::class, "index"]);

/**
 * Formulario de creación de centro
 */
Route::get("centros/crear", function () {
    return view("centros.crear");
});


Route::get("verCentro/{id}", [CentroController::class, 'show']);

/**
 * Función para guardar un nuevo centro
 */
Route::post("newCentro", [CentroController::class, 'store']);

/**
 * Formulario para edición de centro
 */
Route::get("editCentro/{id}", [CentroController::class, 'edit']);


/**
 * Función para editar centro
 */
Route::post("updateCentro/{id}", [CentroController::class, 'update']);

/**
 * Función para borrar centro
 */
Route::get("deleteCentro/{id}", [CentroController::class, 'destroy']);


/**
 * Vista general de todos los usuarios de la aplicación
 */
Route::get("usuarios", [UsuarioController::class, "index"]);

Route::get("usuarios/crear", function () {
    return view("usuarios.crear");
    });

Route::get("verUsuario/{id}", [UsuarioController::class, 'show']);

Route::post("newUsuario", [UsuarioController::class, 'store']);

Route::get("editUsuario/{id}", [UsuarioController::class, 'edit']);

Route::post("updateUsuario/{id}", [UsuarioController::class, 'update']);

Route::get("deleteUsuario/{id}", [UsuarioController::class, 'destroy']);


/**
 * Vista general de todos las asistencias de la aplicación
 */
Route::get("asistencias", [AsistenciaController::class, "index"]);



Route::get("asistencias/crear", function() {return view("asistencias.crear");});

Route::get("verAsistencia/{id}", [AsistenciaController::class, 'show']);
/**
 * Función para guardar un nuevo asistencias
 */
Route::post("newAsistencia", [AsistenciaController::class, 'store']);

/**
 * Formulario para edición de asistencias
 */
Route::get("editAsistencia/{id}", [AsistenciaController::class, 'edit']);


/**
 * Función para editar asistencias
 */
Route::post("updateAsistencia/{id}", [AsistenciaController::class, 'update']);

/**
 * Función para borrar asistencias
 */
Route::get("deleteAsistencias/{id}", [AsistenciaController::class, 'destroy']);




/* ------------------ Funciones de usuario ----------------------*/


/**
 * Vista principal, Login a la aplicación
 */
Route::get('/', function () {
    return view('login');
});

/**
 * Vista de perfil de usuario
 */
Route::get('/usuario', function () {
    return view('usuario');
});

/**
 * Vista de fichajes/asistencias del usuario
 */
Route::get('/registro', function () {
    return view('registro');
});

/**
 * Vista del perfíl de administrador
 */
Route::get('/admin', function () {
    return view('administrador');
});

/**
 * Vista del la sede seleccionada
 */
Route::get('/sede', function () {
    return view('sede');
});

/**
 * 
 */
Route::post('/login',  [UsuarioController::class, 'exists']);
