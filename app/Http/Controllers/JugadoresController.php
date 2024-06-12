<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('equipo_id')) {
            $jugadores = Jugador::where('equipo_id', $request->equipo_id)->get();
       }   else {
            $jugadores = Jugador::all();}

        return $jugadores;
    }

    public function buscarRut(Request $request)
    {
        if ($request->has('rut')) {
            $jugadores = Jugador::where('rut', $request->rut)->get();
       }   else {
            $jugadores = Jugador::all();}

        return $jugadores;
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
        $jugador=new Jugador();
        $jugador->nombre=$request->nombre;
        $jugador->apellido=$request->apellido;
        $jugador->rut=$request->rut;
        $jugador->nickname=$request->nickname;
        $jugador->equipo_id=$request->equipo_id;
        
        $jugador->save();
        return $jugador;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugador)
    {
        return $jugador;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugador)
    {
        return response()->json([
            'data' => $jugador,
        ], 200);
    }

    
    public function update(Request $request, Jugador $jugador)
    {      
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:40',
            'apellido' => 'string|max:40',
            'nickname' => 'string',
        ]);

       
        $jugador->update($validatedData);

        
        return response()->json([
            'message' => 'Jugador actualizado exitosamente',
            'data' => $jugador,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        return $jugador->delete();
    }
}
