@extends('layouts.app')

@section('template_title')
    {{ $distanciasEntreEstacione->name ?? __('Show') . " " . __('Distancias Entre Estacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Distancia Entre Estaciones de Buses</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('distancias-entre-estaciones.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Estacion Origen:</strong>
                            {{ $distanciasEntreEstacione->estacionOrigen->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Estacion Destino:</strong>
                            {{ $distanciasEntreEstacione->estacionDestino->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Distancia en Km:</strong>
                            {{ $distanciasEntreEstacione->distancia_km }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
