@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Distancias Entre Estacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Distancias Entre Estaciones de Buses</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('distancias-entre-estaciones.update', $distanciasEntreEstacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('distancias-entre-estacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
