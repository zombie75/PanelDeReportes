<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExternalController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PrimeraPantallaController;
use App\Http\Controllers\SegundaPantallaController;

Route::get('/', 'App\Http\Controllers\ExternalController@index');
Route::get('/estudiante', [EstudianteController::class, 'listar'])->name('estudiante');