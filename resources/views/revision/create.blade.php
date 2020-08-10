@extends('plantilla.plantilla')
@section('contenido')
    <div class="col-md-12">
        <div class="card card-blue">
            <div class="card-header">
                <h3 class="card-title">Revision de la Tableta</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form role="form" action="{{url('revision')}}" method="POST" class="form-horizontal">
                    @method('POST')
                    {{ csrf_field() }}
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <p>Corregir los siguientes campos:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <label for="">Estado de la Tablet</label><code> *</code>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estadotablet" value="0">
                                    <label class="form-check-label">Operativa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estadotablet" value="1">
                                    <label class="form-check-label">Observada</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Siguiente" class="btn btn-primary">
{{--                        <a href="{{url('siguiente1')}}" class="btn btn-primary">siguiente</a>--}}
                        <a href="{{url('revision')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
@endsection
@section('scripts')
@endsection
