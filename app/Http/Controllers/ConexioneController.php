<?php

namespace App\Http\Controllers;

use App\Models\Conexione;
use App\Http\Requests\ConexioneRequest;
use App\Models\Estacione;

/**
 * Class ConexioneController
 * @package App\Http\Controllers
 */
class ConexioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conexiones = Conexione::paginate();

        return view('conexione.index', compact('conexiones'))
            ->with('i', (request()->input('page', 1) - 1) * $conexiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $conexione = new Conexione();

        $estacion = Estacione::pluck('nombre', 'id');

        return view('conexione.create', compact('conexione', 'estacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConexioneRequest $request)
    {
        Conexione::create($request->validated());

        return redirect()->route('conexiones.index')
            ->with('success', 'Conexion entre Estaciones Creada con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $conexione = Conexione::find($id);

        return view('conexione.show', compact('conexione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $conexione = Conexione::find($id);

        $estacion = Estacione::pluck('nombre', 'id');


        return view('conexione.edit', compact('conexione', 'estacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConexioneRequest $request, Conexione $conexione)
    {
        $conexione->update($request->validated());

        return redirect()->route('conexiones.index')
            ->with('success', 'Conexion entre Estaciones Actualizada con Exito.');
    }

    public function destroy($id)
    {
        Conexione::find($id)->delete();

        return redirect()->route('conexiones.index')
            ->with('success', 'Conexion entre Estaciones Eliminada con Exito.');
    }
}
