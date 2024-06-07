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
        $pilotos = Piloto::with(['municipalidades', 'contacto', 'direccionesResidencia'])
            ->get()
            ->map(function ($piloto) {
                $municipio = $piloto->municipalidades->first(); // Obtener el primer municipio asociado al piloto
                $contacto = $piloto->contacto->first(); // Obtener el primer contacto asociado al piloto
                $direccionResidencia = $piloto->direccionesResidencia->first(); // Obtener la primera dirección de residencia asociada al piloto

                return [
                    'Nombre_Piloto' => $piloto->nombre,
                    'Fecha_Nacimiento' => $piloto->fecha_nacimiento,
                    'Genero' => $piloto->genero,
                    'Municipio' => $municipio ? $municipio->municipio : null,
                    'Telefono' => $contacto ? $contacto->telefono : null,
                    'Correo' => $contacto ? $contacto->correo : null,
                    'Direccion' => $direccionResidencia ? $direccionResidencia->direccion : null,
                    'Ciudad' => $direccionResidencia ? $direccionResidencia->ciudad : null,
                    'Codigo_Postal' => $direccionResidencia ? $direccionResidencia->codigo_postal : null,
                ];
            });


        $lineas = Linea::with(['municipalidad'])->get();

        return view('home', compact('estaciones', 'autobuses', 'pilotos', 'lineas'));
    }
}
