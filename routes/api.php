<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PaisController;
use App\Http\Controllers\Api\EventoController;
use App\Http\Controllers\Api\DisciplinaController;
use App\Http\Controllers\Api\MedallaController;
use App\Http\Controllers\Api\ParticipanteController;

// Rutas para la entidad Pais
Route::get('participantes', [ParticipanteController::class, 'index']);
Route::get('participantes/{id}', [ParticipanteController::class, 'show']);
Route::post('participantes', [ParticipanteController::class, 'store']);
Route::put('participantes/{id}', [ParticipanteController::class, 'update']);
Route::delete('participantes/{id}', [ParticipanteController::class, 'destroy']);


/*Rutas de los metodos Https de la tabla "eventos" para el api*/

Route::get('eventos', [EventoController::class, 'index']);
Route::get('eventos/{id}', [EventoController::class, 'show']);
Route::post('eventos', [EventoController::class, 'store']);
Route::put('eventos/{id}', [EventoController::class, 'update']);
Route::delete('eventos/{id}', [EventoController::class, 'destroy']);

/*Rutas de los metodos Https de la tabla "paises" para el api*/

Route::get('paises', [PaisController::class, 'index']);
Route::get('paises/{id}', [PaisController::class, 'show']);
Route::post('paises', [PaisController::class, 'store']);
Route::put('paises/{id}', [PaisController::class, 'update']);
Route::delete('paises/{id}', [PaisController::class, 'destroy']);

/*Rutas de los metodos Https de la tabla "disciplinas" para el api*/

Route::get('disciplinas', [DisciplinaController::class, 'index']);
Route::get('disciplinas/{id}', [DisciplinaController::class, 'show']);
Route::post('disciplinas', [DisciplinaController::class, 'store']);
Route::put('disciplinas/{id}', [DisciplinaController::class, 'update']);
Route::delete('disciplinas/{id}', [DisciplinaController::class, 'destroy']);

/*Rutas de los metodos Https de la tabla "" para el api*/
Route::get('medallas', [MedallaController::class, 'index']);
Route::get('medallas/{id}', [MedallaController::class, 'show']);
Route::post('medallas', [MedallaController::class, 'store']);
Route::put('medallas/{id}', [MedallaController::class, 'update']);
Route::delete('medallas/{id}', [MedallaController::class, 'destroy']);