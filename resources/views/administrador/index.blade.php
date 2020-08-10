@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-0">
        <div class="col-md-6">
            <a href="{{url('administrador/create')}}" class="btn btn-primary">Registrar Administrador</a>
        </div>
        <div class="col-md-6">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row mt-1">
        <dir class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Administradores</strong>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>Apellidos</th>
                                <th>Nombres</th>
                                <th>Sexo</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $trab)
                            <tr>
                                <td>{{$trab->trab_dni}}</td>
                                <td>{{$trab->trab_ape}}</td>
                                <td>{{$trab->trab_nom}}</td>
                                <td>
                                    @if ($trab->trab_sexo == 1)
                                        Masculino
                                    @else
                                        Femenino
                                    @endif
                                </td>
                                <td>
                                    @if ($trab->trab_est == 1)
                                        <span class="badge badge-success">Activo</span>
                                    @else
                                        <span class="badge badge-danger">Inactivo</span>
                                    @endif
                                </td>
                                <td>
                                    <a data-toggle="modal" class="btn btn-sm btn-info" title="Info de tableta"><i class="fa fa-search"></i></a>
                                    @if ($trab->trab_est == 1)
                                        <a data-toggle="modal" data-target="#modal-est-{{$trab->trab_id}}" title="Inactivar usuario" class="btn btn-sm btn-success"><i class="fa fa-toggle-on"></i></a>
                                    @else
                                        <a data-toggle="modal" data-target="#modal-est-{{$trab->trab_id}}" title="Activar usuario" class="btn btn-sm btn-danger"><i class="fa fa-toggle-off"></i></a>
                                    @endif
                                    @include('administrador.estado')
                                    <a data-toggle="modal" class="btn btn-sm btn-warning" title="editar tableta"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </dir>
    </div>
@endsection
@section('scripts')
@endsection
