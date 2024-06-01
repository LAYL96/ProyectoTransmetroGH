<?php

namespace App\Http\Controllers;

use App\Models\Autobus;
use App\Models\Estacione;
use App\Models\Linea;
use App\Models\Piloto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $estaciones = Estacione::with(['municipalidad', 'operador', 'guardia'])->get();
        $autobuses = Autobus::with(['linea', 'piloto', 'parqueo'])->get();
        $pilotos = Piloto::join('Municipalidades as m', 'Pilotos.id_municipalidad', '=', 'm.id')
            ->join('Contacto as c', 'Pilotos.id', '=', 'c.id_piloto')
            ->join('Direccion_Residencia as d', 'Pilotos.id', '=', 'd.id_piloto')
            ->select(
                'Pilotos.nombre as Nombre_Piloto',
                'Pilotos.fecha_nacimiento as Fecha_Nacimiento',
                'Pilotos.genero as Genero',
                'm.municipio as Municipio',
                'c.telefono as Telefono',
                'c.correo as Correo',
                'd.direccion as Direccion',
                'd.ciudad as Ciudad',
                'd.codigo_postal as Codigo_Postal' // Añadido
            )
            ->get();

        $lineas = Linea::with(['municipalidad'])->get();

        return view('home', compact('estaciones', 'autobuses', 'pilotos', 'lineas'));
    }
}
