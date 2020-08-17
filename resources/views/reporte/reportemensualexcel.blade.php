@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Reporte Diario de Tablets</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="{{url('reportemensualexcel')}}" >
                        @method('POST')
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">F. Inicio</label>
                            <div class="col-md-3">
                                <input class="form-control" type="date" name="finicio" required>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" value="Generar Reporte" id="elSubmit" class="btn btn-primary">
                            <a href="{{url('home')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
