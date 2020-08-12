@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <strong>Registro de tablets Operativa</strong>
                </div>
                <form action="{{url('tablet/operativa')}}" method="POST" class="form-horizontal" onsubmit="return Comprobar();">
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
                                <div class="card card-lightblue">
                                    <div class="card-header">
                                        <h3 class="card-title">Revision Del Equipo Conforme EETT</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">INGRESAR LA MARCA</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="marca" value="VEXIA">
                                                <label class="form-check-label">VEXIA</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="marca" value="ADVANCE" checked>
                                                <label class="form-check-label">ADVANCE</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">INGRESAR EL MODELO</label><code> *</code><br>
                                            <code>Texto en letras MAYUSCULAS</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="modelo" value="SP5730" checked>
                                                <label class="form-check-label">SP5730</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nº DE SERIE </label><code> *</code>
                                            <input type="text" class="form-control" name="n_serie" maxlength="11" minlength="11" placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">A QUE NUMERO DE PALET PERTENECE</label><code> *</code>
                                            <input type="number" class="form-control" name="n_palet" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-lightblue">
                                    <div class="card-header">
                                        <h3 class="card-title">REVISIÓN DEL EMBALAJE Y HARDWARE</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">El embalaje se encuentra en buen estado</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="embalaje" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="embalaje" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El Case esta en buen estado</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="case_revision" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="case_revision" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Tablet enciende</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tablet_enciende" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tablet_enciende" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con Cargador y Cable de alimentación original y en perfecto funcionamiento</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cargador_cable" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cargador_cable" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cargador_cable" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con Baterías en buen estado</label><code> *</code><br>
                                            <code>se verifica la retención de carga</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bateria" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bateria" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bateria" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Puerto USB o micro USB</label><code> *</code><br>
                                            <code>En el caso de ser micro USB debe contar con cable adaptador (otg)</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="puerto_micro_usb" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="puerto_micro_usb" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="puerto_micro_usb" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Ranura para memoria externa microSD</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microsd" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microsd" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microsd" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Pantalla de 10.1" en buen estado</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pantalla" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pantalla" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pantalla" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Resolución de pantalla es</label><code> *</code><br>
                                            <code>Si es OTRA, indicar la resolución</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="resolucion" value="800 x 1280" checked>
                                                <label class="form-check-label">800 x 1280</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="resolucion" value="1920 x 1080">
                                                <label class="form-check-label">1920 x 1080</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="resolucion" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene CPU de cuatro núcleos o Quad Core</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nucleos" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nucleos" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nucleos" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Velocidad de CPU de 1.8 GHz</label><code> *</code><br>
                                            <code>Si es OTRA, indicar SOLO la cantidad de GHz. (el número) ej. 1.2</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="velocidad_cpu" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="velocidad_cpu" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="velocidad_cpu" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Memoria RAM instalada</label><code> *</code><br>
                                            <code>Si es OTRA, indicar SOLO la cantidad de GB. (el número) ej. 4</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_ram" value="2 GB" checked>
                                                <label class="form-check-label">2 GB</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_ram" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_ram" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Memoria de almacenamiento</label><code> *</code><br>
                                            <code>Si es OTRA, indicar SOLO la cantidad de GB. (el número) ej. 16</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_almace" value="32 GB" checked>
                                                <label class="form-check-label">32 GB</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_almace" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_almace" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Cámara frontal funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_frontal" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_frontal" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_frontal" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Cámara trasera funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_trasera" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_trasera" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_trasera" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El Flash de la Cámara trasera funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flash" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flash" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flash" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Conexión WI FI 802.1 1 b/g/n funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wifi" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wifi" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wifi" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Conexión Bluetooth funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bluetooth" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bluetooth" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bluetooth" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El parlante y la conexión de auriculares funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="parlantes_auriculares" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="parlantes_auriculares" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="parlantes_auriculares" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El microfono incorporado funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microfono" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microfono" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microfono" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con FUNDA en buen estado</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="funda" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="funda" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="funda" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con Teclado en perfecto funcionamiento</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="teclado" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="teclado" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="teclado" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-lightblue">
                                    <div class="card-header">
                                        <h3 class="card-title">Revisión de Software</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Indicar la VERSIÓN del Sistema operativo Android</label><code> *</code><br>
                                            <code>Solo ingresar el NUMERO de versión ej. 5 o 5.1</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="version" value="9" checked>
                                                <label class="form-check-label">9</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="version" value="OMITIR" >
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Se revisó la Configuración y arranque inicial</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="configuracion" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="configuracion" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="configuracion" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Se realizo la Verificación de Aplicaciones Básicas instaladas</label><code> *</code><br>
                                            <code>Indique si realizó la verificación de las aplicaciones instaladas</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="veri_apk" value="SI" checked>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="veri_apk" value="NO">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="veri_apk" value="OMITIR">
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Lista de Aplicaciones complementarias instaladas</label><br>
                                            <code>Marque las aplicaciones identificadas en la Tablet</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="" onclick="marcar(this);" required>
                                                <label class="form-check-label">Todos</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="01- Sugarizer.apk">
                                                <label class="form-check-label">01- Sugarizer.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="02- Geogebra/Graficadora.apk">
                                                <label class="form-check-label">02- Geogebra/Graficadora.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="03- Microsoft Word Write.apk">
                                                <label class="form-check-label">03- Microsoft Word Write.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="04- Microsoft Excel View Edit.apk">
                                                <label class="form-check-label">04- Microsoft Excel View Edit.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="05- Microsoft OneNote.apk">
                                                <label class="form-check-label">05- Microsoft OneNote.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="06- Microsoft PowerPoint.apk">
                                                <label class="form-check-label">06- Microsoft PowerPoint.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="07- Mindomo.apk">
                                                <label class="form-check-label">07- Mindomo.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="08- XMind.apk">
                                                <label class="form-check-label">08- XMind.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="09- Mekorama.apk">
                                                <label class="form-check-label">09- Mekorama.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="10- Pintura de Bolsillo/Pocket paint.apk">
                                                <label class="form-check-label">10- Pintura de Bolsillo/Pocket paint.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="11- Pocket Code.apk">
                                                <label class="form-check-label">11- Pocket Code.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="12- ScratchJr.apk">
                                                <label class="form-check-label">12- ScratchJr.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="13- Files by Google Clean up space.apk">
                                                <label class="form-check-label">13- Files by Google Clean up space.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="14- FilmoraGo.apk">
                                                <label class="form-check-label">14- FilmoraGo.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="15- Galería de fotos - QuickPic.apk">
                                                <label class="form-check-label">15- Galería de fotos - QuickPic.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="16- Google Earth.apk<">
                                                <label class="form-check-label">16- Google Earth.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="17- TeamViewer for Remote Control.apk">
                                                <label class="form-check-label">17- TeamViewer for Remote Control.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="18- TeamViewer QuickSupport.apk">
                                                <label class="form-check-label">18- TeamViewer QuickSupport.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="19- VLC.apk">
                                                <label class="form-check-label">19- VLC.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="20- Lazarillo GPS.apk">
                                                <label class="form-check-label">20- Lazarillo GPS.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="21- ASDRA Buscador de entidades.apk">
                                                <label class="form-check-label">21- ASDRA Buscador de entidades.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="22- Leo con Grin.apk">
                                                <label class="form-check-label">22- Leo con Grin.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="23- TapTapSee.apk">
                                                <label class="form-check-label">23- TapTapSee.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="24- Dictapicto.apk">
                                                <label class="form-check-label">24- Dictapicto.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="25- Día a Día.apk">
                                                <label class="form-check-label">25- Día a Día.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="26- TEAyudo a JUGAR.apk">
                                                <label class="form-check-label">26- TEAyudo a JUGAR.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="27- Aipoly Vision.apk">
                                                <label class="form-check-label">27- Aipoly Vision.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="28- Araword.apk">
                                                <label class="form-check-label">28- Araword.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="29- Eye games Dyslexia.apk">
                                                <label class="form-check-label">29- Eye games Dyslexia.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="30- PictoDroid Lite.apk">
                                                <label class="form-check-label">30- PictoDroid Lite.apk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lista_apk[]" value="31- PictogramAgenda.apk">
                                                <label class="form-check-label">31- PictogramAgenda.apk</label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="comyob_hardware" value="null">
                                        <input type="hidden" name="comyob_software" value="null">
                                        <input type="hidden" name="estado" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="{{url('revision')}}" class="btn btn-danger">Cancelar</a>
                        <a href="{{url('revision/create')}}" class="btn btn-dark">Atrás</a>
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

