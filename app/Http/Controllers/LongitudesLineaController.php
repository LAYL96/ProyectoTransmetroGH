<?php

namespace App\Http\Controllers;

use App\Models\LongitudesLinea;
use App\Http\Requests\LongitudesLineaRequest;
use App\Models\Linea;

/**
 * Class LongitudesLineaController
 * @package App\Http\Controllers
 */
class LongitudesLineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $longitudesLineas = LongitudesLinea::paginate();

        return view('longitudes-linea.index', compact('longitudesLineas'))
            ->with('i', (request()->input('page', 1) - 1) * $longitudesLineas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $longitudesLinea = new LongitudesLinea();

        $linea = Linea::pluck('nombre', 'id');

        return view('longitudes-linea.create', compact('longitudesLinea', 'linea'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LongitudesLineaRequest $request)
    {
        LongitudesLinea::create($request->validated());

        return redirect()->route('longitudes-lineas.index')
            ->with('success', 'Longitud de la LInea Creada con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $longitudesLinea = LongitudesLinea::find($id);

        return view('longitudes-linea.show', compact('longitudesLinea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $longitudesLinea = LongitudesLinea::find($id);

        $linea = Linea::pluck('nombre', 'id');

        return view('longitudes-linea.edit', compact('longitudesLinea', 'linea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LongitudesLineaRequest $request, LongitudesLinea $longitudesLinea)
    {
        $longitudesLinea->update($request->validated());

        return redirect()->route('longitudes-lineas.index')
            ->with('success', 'Longitud de la LInea Actualizada con Exito.');
    }

    public function destroy($id)
    {
        LongitudesLinea::find($id)->delete();

        return redirect()->route('longitudes-lineas.index')
            ->with('success', 'Longitud de la LInea Eliminada con Exito.');
    }
}
