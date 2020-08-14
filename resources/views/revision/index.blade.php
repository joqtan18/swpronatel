@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-0">
        <div class="col-md-6">
            <a href="{{url('revision/create')}}" class="btn btn-primary">Registrar Tableta</a>
            @if(Auth::user()->hasrole('admin'))
            <a href="{{url('reporterevisionexcel/')}}" class="btn btn-success"><i class="fa fa-file-excel"></i></a>
            @endif
        </div>
        <div class="col-md-6">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @elseif(session('status2'))
                <div class="alert alert-danger">
                    {{ session('status2') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row mt-1">
        <dir class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Registro de Revisiones de Tablets</strong>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>N° Serie</th>
                                <th>Marca</th>
                                <th>Propietario</th>
                                <th>Palet</th>
                                <th>Hora</th>
                                <th>Estado Tableta</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $rev)
                            <tr>
                                <td>{{$rev->usuario}}</td>
                                <td>{{$rev->n_serie}}</td>
                                <td>{{$rev->marca}}</td>
                                <td>{{$rev->trab_nom.', '.$rev->trab_ape}}</td>
                                <td>{{$rev->n_palet}}</td>
                                <td>{{$rev->hora}}</td>
                                <td>
                                    @if($rev->estado == 0)
                                        <span class="badge badge-success">Operativa</span>
                                    @else
                                        <span class="badge badge-danger">Observada</span>
                                    @endif
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#modal-info-{{$rev->id_revision}}" title="Info de la tablet" class="btn btn-sm btn-info"><i class="fa fa-search"></i></a>
                                    @include('revision.info')
                                    <a data-toggle="modal" class="btn btn-sm btn-warning" title="editar tableta"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('revision/'.$rev->id_revision.'/edit')}}" title="Editar tablet" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a data-target="#modal-delete-{{$rev->id_revision}}" title="eliminar tablet" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    @include('revision.delete')
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
{{--modelo para el modal--}}
{{--<a data-toggle="modal" data-target="#modal-info-{{$alum->alum_id}}" class="btn btn-sm btn-info"><i class="fa fa-search"></i></a>--}}
