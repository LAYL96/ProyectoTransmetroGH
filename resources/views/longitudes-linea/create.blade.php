@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Longitudes Linea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Nueva Longitud de Linea</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('longitudes-lineas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('longitudes-linea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
