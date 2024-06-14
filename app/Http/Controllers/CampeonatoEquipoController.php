<?php

namespace App\Http\Controllers;

use App\Models\CampeonatoEquipo;
use Illuminate\Http\Request;

class CampeonatoEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campeonatosEquipos= CampeonatoEquipo::all();
        return $campeonatosEquipos;
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
        $request->validate([
            'posicion' => 'required|integer', // Ejemplo de validación para posición
            'equipo_id' => 'required|exists:equipos,id', // Valida que equipo_id exista en la tabla equipos
            'campeonato_id' => 'required|exists:campeonatos,id', // Valida que campeonato_id exista en la tabla campeonatos
        ]);
    
        $campeonatoEquipo = new CampeonatoEquipo();
        $campeonatoEquipo->posicion = $request->posicion;
        $campeonatoEquipo->equipo_id = $request->equipo_id;
        $campeonatoEquipo->campeonato_id = $request->campeonato_id;
        $campeonatoEquipo->save();
    
        return response()->json($campeonatoEquipo, 201);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CampeonatoEquipo  $campeonatoEquipo
     * @return \Illuminate\Http\Response
     */
    public function show(CampeonatoEquipo $campeonatoEquipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CampeonatoEquipo  $campeonatoEquipo
     * @return \Illuminate\Http\Response
     */
    public function edit(CampeonatoEquipo $campeonatoEquipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CampeonatoEquipo  $campeonatoEquipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampeonatoEquipo $campeonatoEquipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampeonatoEquipo  $campeonatoEquipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampeonatoEquipo $campeonatoEquipo)
    {
        //
    }
}
