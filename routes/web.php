<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AseguradoraController;

Route::get('/', function () {
    return view('home');
});

Route::resource('aseguradoras', AseguradoraController::class);
Route::resource('alumnos', AlumnoController::class);