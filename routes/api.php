<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\CampeonatosController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\CampeonatoEquipoController;

Route::resource('/equipos', EquiposController::class);
Route::resource('/jugadores', JugadoresController::class);
Route::resource('/campeonatos', CampeonatosController::class);
Route::resource('/partidos', PartidosController::class);
Route::resource('/resultados', ResultadosController::class);
Route::resource('/campeonatoequipo', CampeonatoEquipoController::class);

Route::get('campeonatos/{id}/equipos', [CampeonatosController::class, 'equiposPorCampeonato']);
Route::get('campeonatos/{id}/equipos/no', [CampeonatoEquipoController::class, 'equiposNoEnCampeonato']);

Route::put('/jugadores', [JugadoresController::class, 'update']);
Route::put('/equipos', [EquiposController::class, 'update']);
Route::put('/campeonatos', [CampeonatosController::class, 'update']);
Route::put('/partidos', [PartidosController::class, 'update']);

Route::delete('/jugadores', [JugadoresController::class, 'destroy']);
Route::delete('/partidos', [PartidosController::class, 'destroy']);
