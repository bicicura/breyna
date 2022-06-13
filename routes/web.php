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
    $ensayos = false;
    return view('index', ['ensayos' => $ensayos]);
});

Route::get('/institucional', function () {
    $ensayos = false;
    return view('institucional', ['ensayos' => $ensayos]);
});

Route::get('/servicios', function () {
    $ensayos = false;
    return view('serviciosMedicos', ['ensayos' => $ensayos]);
});

use App\Http\Controllers\ServicioController;
Route::get('/neurologia', [ServicioController::class, 'NeuIndex']);

Route::get('/cardiologia', [ServicioController::class, 'cardiologiaIndex']);

Route::get('/prevencion-enfermedad-vascular', function () {
    $ensayos = false;
    return view('prevencion-enfermedad-vascular', ['ensayos' => $ensayos]);
});

Route::get('/dr-estol', function () {
    $ensayos = false;
    return view('dr-estol', ['ensayos' => $ensayos]);
});

Route::get('/servicios/{articulo}', [ServicioController::class, 'articulosPorId']);

Route::get('/grupo-medico', function () {
    $ensayos = false;
    return view('grupo-medico', ['ensayos' => $ensayos]);
});

Route::get('/ensayos-clinicos', function () {
    $ensayos = true;
    return view('ensayos-clinicos', ['ensayos' => $ensayos]);
});

Route::get('/areas-de-desarrollo', function () {
    $ensayos = true;
    return view('areas-desarrollo', ['ensayos' => $ensayos]);
});

Route::get('/nuestro-staff', function () {
    $ensayos = true;
    return view('staff', ['ensayos' => $ensayos]);
});

Route::get('/infraestructura', function () {
    $ensayos = true;
    return view('infraestructura', ['ensayos' => $ensayos]);
});

Route::get('/sponsors', [ServicioController::class, 'sponsors']);

Route::get('/contacto', function () {
    $ensayos = true;
    return view('contacto', ['ensayos' => $ensayos]);
});

Route::get('/dr-estol/acv', function () {
    $ensayos = false;
    return view('dr-estol.acv', ['ensayos' => $ensayos]);
});

Route::get('/dr-estol/neurologia', function () {
    $ensayos = false;
    return view('dr-estol.neurologia', ['ensayos' => $ensayos]);
});

Route::get('/dr-estol/menciones', function () {
    $ensayos = false;
    return view('dr-estol.menciones', ['ensayos' => $ensayos]);
});

Route::get('/prevencion-enfermedad-vascular/tabaco', function () {
    $ensayos = false;
    return view('articulos.tabaco', ['ensayos' => $ensayos]);
});

Route::get('/prevencion-enfermedad-vascular/diabetologia', function () {
    $ensayos = false;
    return view('articulos.diabetologia', ['ensayos' => $ensayos]);
});