<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\CampeonatosController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\ResultadosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::resource('/equipos',EquiposController::class);
Route::resource('/jugadores',JugadoresController::class);
Route::resource('/campeonatos',CampeonatosController::class);
Route::resource('/partidos',PartidosController::class);
Route::resource('/resultados',ResultadosController::class);
Route::get('campeonatos/{id}/equipos', [CampeonatosController::class, 'equiposPorCampeonato']);