@extends('layouts.app')

@section('template_title')
    Municipalidade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Municipalidades
                            </span>

                             <div class="float-right">
                                <a href="{{ route('municipalidades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Crear Nuevo
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Departamento</th>
										<th>Municipio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($municipalidades as $municipalidade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $municipalidade->departamento }}</td>
											<td>{{ $municipalidade->municipio }}</td>

                                            <td>
                                                <form action="{{ route('municipalidades.destroy',$municipalidade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('municipalidades.show',$municipalidade->id) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('municipalidades.edit',$municipalidade->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $municipalidades->links() !!}
            </div>
        </div>
    </div>
@endsection

