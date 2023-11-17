<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canciones = Cancion::all();

        return view('mostrarCanciones', ['canciones' => $canciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insertarCancion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('cancions')->insert([
            'nombre' => $request->input('nombre'),
            'duracion' => $request->input('duracion'),
            'año' => $request->input('año'),
            'artista' => $request->input('artista'),
        ]);

        return redirect(route('cancion.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Cancion $cancion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cancion $cancion)
    {
        return view('modificarCancion', ['cancion' => $cancion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cancion $cancion)
    {
        $cancion->nombre = $request->input('nombre');
        $cancion->duracion = $request->input('duracion');
        $cancion->año = $request->input('año');
        $cancion->artista = $request->input('artista');

        $cancion->save();

        return redirect(route('cancion.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cancion $cancion)
    {
        $cancion->delete();

        return redirect(route('cancion.index'));
    }
}
