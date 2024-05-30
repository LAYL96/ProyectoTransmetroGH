@extends('layouts.app')

@section('template_title')
    {{ $acceso->name ?? __('Show') . " " . __('Acceso') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles del Acceso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('accesos.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Linea:</strong>
                            {{ $acceso->linea->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $acceso->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
