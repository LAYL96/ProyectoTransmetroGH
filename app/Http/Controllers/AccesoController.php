<?php

namespace App\Http\Controllers;

use App\Models\Acceso;
use App\Http\Requests\AccesoRequest;
use App\Models\Linea;

/**
 * Class AccesoController
 * @package App\Http\Controllers
 */
class AccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accesos = Acceso::paginate();

        return view('acceso.index', compact('accesos'))
            ->with('i', (request()->input('page', 1) - 1) * $accesos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $acceso = new Acceso();

        $linea = Linea::pluck('nombre', 'id');

        return view('acceso.create', compact('acceso', 'linea'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccesoRequest $request)
    {
        Acceso::create($request->validated());

        return redirect()->route('accesos.index')
            ->with('success', 'Acceso Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $acceso = Acceso::find($id);

        return view('acceso.show', compact('acceso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $acceso = Acceso::find($id);

        $linea = Linea::pluck('nombre', 'id');

        return view('acceso.edit', compact('acceso', 'linea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccesoRequest $request, Acceso $acceso)
    {
        $acceso->update($request->validated());

        return redirect()->route('accesos.index')
            ->with('success', 'Acceso Actualizado con Exito.');
    }

    public function destroy($id)
    {
        Acceso::find($id)->delete();

        return redirect()->route('accesos.index')
            ->with('success', 'Acceso Eliminado con Exito.');
    }
}
