<?php

namespace App\Http\Controllers;

use App\Models\DistanciasEntreEstacione;
use App\Http\Requests\DistanciasEntreEstacioneRequest;
use App\Models\Estacione;

/**
 * Class DistanciasEntreEstacioneController
 * @package App\Http\Controllers
 */
class DistanciasEntreEstacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distanciasEntreEstaciones = DistanciasEntreEstacione::paginate();

        return view('distancias-entre-estacione.index', compact('distanciasEntreEstaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $distanciasEntreEstaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $distanciasEntreEstacione = new DistanciasEntreEstacione();

        $estacion = Estacione::pluck('nombre', 'id');

        return view('distancias-entre-estacione.create', compact('distanciasEntreEstacione', 'estacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DistanciasEntreEstacioneRequest $request)
    {
        DistanciasEntreEstacione::create($request->validated());

        return redirect()->route('distancias-entre-estaciones.index')
            ->with('success', 'Distancia Creada con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $distanciasEntreEstacione = DistanciasEntreEstacione::find($id);

        return view('distancias-entre-estacione.show', compact('distanciasEntreEstacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $distanciasEntreEstacione = DistanciasEntreEstacione::find($id);

        $estacion = Estacione::pluck('nombre', 'id');

        return view('distancias-entre-estacione.edit', compact('distanciasEntreEstacione', 'estacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DistanciasEntreEstacioneRequest $request, DistanciasEntreEstacione $distanciasEntreEstacione)
    {
        $distanciasEntreEstacione->update($request->validated());

        return redirect()->route('distancias-entre-estaciones.index')
            ->with('success', 'Distancia Actualizada con Exito.');
    }

    public function destroy($id)
    {
        DistanciasEntreEstacione::find($id)->delete();

        return redirect()->route('distancias-entre-estaciones.index')
            ->with('success', 'Distancia Eliminada con Exito.');
    }
}
