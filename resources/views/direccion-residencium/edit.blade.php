@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Direccion Residencium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Direccion Residencia</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('direccion-residencia.update', $direccionResidencium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('direccion-residencium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
