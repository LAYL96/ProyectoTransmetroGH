@extends('layouts.app')

@section('template_title')
    {{ $conexione->name ?? __('Show') . " " . __('Conexione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Conexion entre Estaciones de Buses</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('conexiones.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Estacion Origen:</strong>
                            {{ $conexione->estacionOrigen->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estacion Destino:</strong>
                            {{ $conexione->estacionDestino->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion Ip:</strong>
                            {{ $conexione->direccion_ip }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Puerto:</strong>
                            {{ $conexione->puerto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Protocolo:</strong>
                            {{ $conexione->protocolo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
