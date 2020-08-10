@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-0">
        <div class="col-md-6">
            <a href="{{url('revision/create')}}" class="btn btn-primary">Registrar Tableta</a>
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
                                <th>N° Serie</th>
                                <th>Marca</th>
                                <th>Propietario</th>
                                <th>Hora</th>
                                <th>Estado Tableta</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>70327395</td>
                                <td>19685485685</td>
                                <td>Advance</td>
                                <td>Joseph Joqtan, Rodriguez Richarte</td>
                                <td>19:15:55</td>
                                <td>

                                        <span class="badge badge-success">0Operativo</span>

                                        <span class="badge badge-danger">1Observado</span>

                                </td>
                                <td>
                                    <a data-toggle="modal" class="btn btn-sm btn-info" title="Info de tableta"><i class="fa fa-search"></i></a>
                                    <a data-toggle="modal" class="btn btn-sm btn-warning" title="editar tableta"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>70327395</td>
                                <td>19685485685</td>
                                <td>Advance</td>
                                <td>Joseph Joqtan, Rodriguez Richarte</td>
                                <td>20:15:55</td>
                                <td>

                                    <span class="badge badge-success">0Operativo</span>

                                    <span class="badge badge-danger">1Observado</span>

                                </td>
                                <td>
                                    <a data-toggle="modal" class="btn btn-sm btn-info" title="Info de tableta"><i class="fa fa-search"></i></a>
                                    <a data-toggle="modal" class="btn btn-sm btn-warning" title="editar tableta"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
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
