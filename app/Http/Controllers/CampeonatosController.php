<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campeonatos= Campeonato::orderBy('id')->get();
        return $campeonatos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $campeonato = new Campeonato();
            $campeonato->juego = $request->juego;
            $campeonato->nombre = $request->nombre;
            $campeonato->reglas = $request->reglas;
            $campeonato->premios = $request->premios;
            $campeonato->save();

            return response()->json(['message' => 'Campeonato creado exitosamente', 'data' => $campeonato], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error', 'errors' => ['general' => [$e->getMessage()]]], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function show(Campeonato $campeonato)
    {
        return response()->json($campeonato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function edit(Campeonato $campeonato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campeonato $campeonato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campeonato $campeonato)
    {
        return $campeonato->delete();
    }

    public function equiposPorCampeonato($campeonato_id)
    {
        $campeonato = Campeonato::findOrFail($campeonato_id);
        $equipos = $campeonato->equipos;
        return response()->json($equipos);
    }
}
