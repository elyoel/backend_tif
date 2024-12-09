<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ParticipantesController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\MedallasController;


//Auth::routes();
//Route::resource('pais', 'PaisController');

//Rutas para Pais
Route::get('pais', [PaisController::class, 'index']);
Route::get('pais/{id}', [PaisController::class, 'show']);
Route::post('pais', [PaisController::class, 'store']);
Route::put('pais/{id}', [PaisController::class, 'update']);
Route::delete('pais/{id}', [PaisController::class, 'destroy']);

// Rutas para Participantes
Route::get('participantes', [ParticipantesController::class, 'index']);
Route::get('participantes/{id}', [ParticipantesController::class, 'show']);
Route::post('participantes', [ParticipantesController::class, 'store']);
Route::put('participantes/{id}', [ParticipantesController::class, 'update']);
Route::delete('participantes/{id}', [ParticipantesController::class, 'destroy']);


//Rutas para Eventos
Route::get('eventos', [EventosController::class, 'index']);
Route::get('eventos/{id}', [EventosController::class, 'show']);
Route::post('eventos', [EventosController::class, 'store']);
Route::put('eventos/{id}', [EventosController::class, 'update']);
Route::delete('eventos/{id}', [EventosController::class, 'destroy']);

//Rutas para Disciplinas
Route::get('disciplinas', [DisciplinasController::class, 'index']);
Route::get('disciplinas/{id}', [DisciplinasController::class, 'show']);
Route::post('disciplinas', [DisciplinasController::class, 'store']);
Route::put('disciplinas/{id}', [DisciplinasController::class, 'update']);
Route::delete('disciplinas/{id}', [DisciplinasController::class, 'destroy']);

//Rutas para Medallas
Route::get('medallas', [MedallasController::class, 'index']);
Route::get('medallas/{id}', [MedallasController::class, 'show']);
Route::post('medallas', [MedallasController::class, 'store']);
Route::put('medallas/{id}', [MedallasController::class, 'update']);
Route::delete('medallas/{id}', [MedallasController::class, 'destroy']);