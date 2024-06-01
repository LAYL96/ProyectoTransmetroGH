@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Bienvenidos</h1>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Listado de Estaciones</h2>
                                    <table class="table table-striped table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Municipio</th>
                                                <th>Nombre Operador</th>
                                                <th>Nombre Guardia</th>
                                                <th>Nombre Estacion</th>
                                                <th>Direccion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($estaciones as $estacion)
                                                <tr>
                                                    <td>{{ $estacion->municipalidad->municipio }}</td>
                                                    <td>{{ $estacion->operador->nombre }}
                                                        {{ $estacion->operador->apellido }}</td>
                                                    <td>{{ $estacion->guardia->nombre }} {{ $estacion->guardia->apellido }}
                                                    </td>
                                                    <td>{{ $estacion->nombre }}</td>
                                                    <td>{{ $estacion->direccion }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <div class="col-md-6">
                                    <h2>Listado de Autobuses</h2>
                                    <table class="table table-striped table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Linea de Autobus</th>
                                                <th>Nombre del Piloto</th>
                                                <th>Numero de Parqueo</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Placa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($autobuses as $autobus)
                                                <tr>
                                                    <td>{{ $autobus->linea->nombre }}</td>
                                                    <td>{{ $autobus->piloto->nombre }}
                                                        {{ $autobus->piloto->apellido }}</td>
                                                    <td>{{ $autobus->parqueo->numero }} </td>
                                                    <td>{{ $autobus->marca }}</td>
                                                    <td>{{ $autobus->modelo }}</td>
                                                    <td>{{ $autobus->placa }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <h1>Informacion de los Pilotos</h1>
                                <table class="table table-striped table-hover">
                                    <thead class="thead-dark">
                                        <thead>
                                            <tr>
                                                <th>Nombre Piloto</th>
                                                <th>Municipio</th>
                                                <th>Dirección</th>
                                                <th>Ciudad</th>
                                                <th>Teléfono</th>
                                                <th>Correo</th>
                                                <th>Código Postal</th>
                                                <th>Fecha de Nacimiento</th>
                                                <th>Género</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        @foreach ($pilotos as $piloto)
                                            <tr>
                                                <td>{{ $piloto->Nombre_Piloto }}</td>
                                                <td>{{ $piloto->Municipio }}</td>
                                                <td>{{ $piloto->Direccion }}</td>
                                                <td>{{ $piloto->Ciudad }}</td>
                                                <td>{{ $piloto->Telefono }}</td>
                                                <td>{{ $piloto->Correo }}</td>
                                                <td>{{ $piloto->Codigo_Postal }}</td>
                                                <td>{{ $piloto->Fecha_Nacimiento }}</td>
                                                <td>{{ $piloto->Genero }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <h2>Informacion de Lineas de Buses</h2>
                            <table class="table table-striped table-hover">
                                <thead class="thead-dark">
                                    <thead>
                                        <tr>
                                            <th>Municipio</th>
                                            <th>Nombre de Linea</th>
                                            <th>Zona</th>
                                            <th>Distancia Total en KM</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    @foreach ($lineas as $linea)
                                        <tr>
                                            <td>{{ $linea->municipalidad->municipio }}</td>
                                            <td>{{ $linea->nombre }}</td>
                                            <td>{{ $linea->zona }}</td>
                                            <td>{{ $linea->distancia_total_km }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div>


                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
