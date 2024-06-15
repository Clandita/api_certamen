<?php

namespace App\Http\Controllers;

use App\Models\CampeonatoEquipo;
use App\Models\Equipo;
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
        $campeonatoEquipo = new CampeonatoEquipo();
        $campeonatoEquipo->posicion = $request->posicion ?? 0;
        $campeonatoEquipo->equipo_id = $request->equipo_id;
        $campeonatoEquipo->campeonato_id = $request->campeonato_id;
        
        $campeonatoEquipo->save();
        return response()->json($campeonatoEquipo);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CampeonatoEquipo  $campeonatoEquipo
     * @return \Illuminate\Http\Response
     */
    public function show(CampeonatoEquipo $campeonatoEquipo)
    {
        return $campeonatoEquipo;
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
    public function equiposNoEnCampeonato($campeonatoId)
    {
        // Obtén los IDs de los equipos que ya están en el campeonato
        $equiposEnCampeonato = CampeonatoEquipo::where('campeonato_id', $campeonatoId)->pluck('equipo_id')->toArray();

        // Obtén los equipos que no están en el campeonato
        $equiposNoEnCampeonato = Equipo::whereNotIn('id', $equiposEnCampeonato)->get();

        return response()->json($equiposNoEnCampeonato);
    }
}
