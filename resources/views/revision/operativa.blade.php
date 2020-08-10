@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <strong>Registro de tablets Operativas</strong>
                </div>
                <form action="{{url('revision')}}" method="POST" class="form-horizontal" onsubmit="return Comprobar();">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Revision Del Equipo Conforme EETT</h3>
                                    </div>
                                    <div class="card-body">
                                        a
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Revisión de Software</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Indicar la VERSIÓN del Sistema operativo Android</label><code> *</code><br>
                                            <code>Solo ingresar el NUMERO de versión ej. 5 o 5.1</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet" value="0" placeholder="Solo ingresar el NUMERO de versión ej. 5 o 5.1">
                                                <label class="form-check-label">9</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet" value="1">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Se revisó la Configuración y arranque inicial</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet2" value="0">
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet2" value="1">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet2" value="1">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Se realizo la Verificación de Aplicaciones Básicas instaladas</label><code> *</code><br>
                                            <code>Indique si realizó la verificación de las aplicaciones instaladas</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet" value="0">
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet" value="1">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet" value="1">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Lista de Aplicaciones complementarias instaladas</label><code> *</code><br>
                                            <code>Marque las aplicaciones identificadas en la Tablet</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="0" onclick="marcar(this);">
                                                <label class="form-check-label">Todos</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="0">
                                                <label class="form-check-label">01- Sugarizer.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">02- Geogebra/Graficadora.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">03- Microsoft Word Write.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">04- Microsoft Excel View Edit.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">05- Microsoft OneNote.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">06- Microsoft PowerPoint.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">07- Mindomo.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">08- XMind.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">09- Mekorama.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">10- Pintura de Bolsillo/Pocket paint.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">11- Pocket Code.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">12- ScratchJr.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">13- Files by Google Clean up space.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">14- FilmoraGo.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">15- Galería de fotos - QuickPic.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">16- Google Earth.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">17- TeamViewer for Remote Control.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">18- TeamViewer QuickSupport.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">19- VLC.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">20- Lazarillo GPS.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">21- ASDRA Buscador de entidades.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">22- Leo con Grin.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">23- TapTapSee.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">24- Dictapicto.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">25- Día a Día.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">26- TEAyudo a JUGAR.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">27- Aipoly Vision.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">28- Araword.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">29- Eye games Dyslexia.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">30- PictoDroid Lite.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="estadotablet" value="1">
                                                <label class="form-check-label">31- PictogramAgenda.apk</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">OBSERVACIONES O COMENTARIOS DE HARDWARE</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet" value="0">
                                                <label class="form-check-label">Operativa</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estadotablet" value="1">
                                                <label class="form-check-label">Observada</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">OBSERVACIONES O COMENTARIOS DE SOFTWARE</label><code> *</code>
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
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="{{url('revision')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function marcar(source)
        {
            checkboxes=document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
            for(i=0;i<checkboxes.length;i++) //recoremos todos los controles
            {
                if(checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
                {
                    checkboxes[i].checked=source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
                }
            }
        }
    </script>
@endsection
