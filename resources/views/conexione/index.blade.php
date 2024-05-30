@extends('layouts.app')

@section('template_title')
    Conexione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Conexiones entre Estaciones de Buses
                            </span>

                             <div class="float-right">
                                <a href="{{ route('conexiones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Crear Nueva
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
                                        
										<th>Estacion Origen</th>
										<th>Estacion Destino</th>
										<th>Direccion Ip</th>
										<th>Puerto</th>
										<th>Protocolo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conexiones as $conexione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $conexione->estacionOrigen->nombre }}</td>
											<td>{{ $conexione->estacionDestino->nombre }}</td>
											<td>{{ $conexione->direccion_ip }}</td>
											<td>{{ $conexione->puerto }}</td>
											<td>{{ $conexione->protocolo }}</td>

                                            <td>
                                                <form id="delete-form-{{ $conexione->id }}" action="{{ route('conexiones.destroy',$conexione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('conexiones.show',$conexione->id) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('conexiones.edit',$conexione->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeletion({{ $conexione->id }})"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $conexiones->links() !!}
            </div>
        </div>
    </div>

    <script>
        function confirmDeletion(id) {
            Swal.fire({
                title: '¿Está seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endsection
