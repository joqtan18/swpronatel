@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Reporte mensual de Tablets</strong>
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
                            <label class="col-md-1 col-form-label">F. Fin</label>
                            <div class="col-md-3">
                                <input class="form-control" type="date" name="ffin" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Curso</label>
                            <div class="col-md-3" >
                                <select name="idasig" class="form-control">
                                    <option hidden>---Seleccione---</option>
                                    <option value="1">Matemáticas</option>
                                    <option value="2">Comunicación</option>
                                    <option value="3">Ciencias Sociales</option>
                                    <option value="4">Ciencia y Tecnologia</option>
                                    <option value="5">Arte y Cultura</option>
                                    <option value="6">Educacion Fisica</option>
                                    <option value="7">Ingles</option>
                                </select>
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
