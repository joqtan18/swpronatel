@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-0">
        <div class="col-md-6">
            <a href="{{url('ingeniero/create')}}" class="btn btn-primary">Registrar Ingeniero</a>
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
                    <strong>Ingenieros</strong>
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
                        <tr>
                            <td>70327395</td>
                            <td>Rodriguez Richarte</td>
                            <td>Joseph Joqtan</td>
                            <td>Masculino</td>
                            <td>

                                <span class="badge badge-success">activo</span>

                                <span class="badge badge-danger">inactivo</span>

                            </td>
                            <td>
                                <a data-toggle="modal" class="btn btn-sm btn-info" title="Info de tableta"><i class="fa fa-search"></i></a>
                                <a data-toggle="modal"  title="Inactivar usuario" class="btn btn-sm btn-danger"><i class="fa fa-toggle-off"></i></a>
                                {{--                                @else--}}
                                <a data-toggle="modal"  title="Activar usuario" class="btn btn-sm btn-success"><i class="fa fa-toggle-on"></i></a>
                                {{--                                @endif--}}
                                <a data-toggle="modal" class="btn btn-sm btn-warning" title="editar tableta"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>70546859</td>
                            <td>Sandoval Castro</td>
                            <td>Milagros Rubi</td>
                            <td>Femenino</td>
                            <td>

                                <span class="badge badge-success">activo</span>

                                <span class="badge badge-danger">inactivo</span>

                            </td>
                            <td>
                                <a data-toggle="modal" class="btn btn-sm btn-info" title="Info de tableta"><i class="fa fa-search"></i></a>
                                {{--                                @if ($trab->trab_est == 1)--}}
                                <a data-toggle="modal"  title="Inactivar usuario" class="btn btn-sm btn-danger"><i class="fa fa-toggle-off"></i></a>
                                {{--                                @else--}}
                                <a data-toggle="modal"  title="Activar usuario" class="btn btn-sm btn-success"><i class="fa fa-toggle-on"></i></a>
                                {{--                                @endif--}}
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
