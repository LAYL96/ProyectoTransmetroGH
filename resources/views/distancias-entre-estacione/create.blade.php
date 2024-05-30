@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Distancias Entre Estacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Nueva Distancia Entre Estaciones de Buses</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('distancias-entre-estaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('distancias-entre-estacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
