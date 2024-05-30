@extends('layouts.app')

@section('template_title')
    {{ $longitudesLinea->name ?? __('Show') . " " . __('Longitudes Linea') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Longitud de Linea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('longitudes-lineas.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Linea:</strong>
                            {{ $longitudesLinea->linea->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Longitud en Km:</strong>
                            {{ $longitudesLinea->longitud_km }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
