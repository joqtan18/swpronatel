@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-warning">
                <div class="card-header">
                    <strong>Modificar Tablet</strong>
                </div>
                <form action="{{url('revision/'.$rev->id_revision)}}" method="POST">
                    @method('PATCH')
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
                                            <label for="">Estado de la Tablet</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estado" value="1" {{($rev->estado=="1")? "checked" : "" }}>
                                                <label class="form-check-label">Observado</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estado" value="0" {{($rev->estado=="0")? "checked" : "" }}>
                                                <label class="form-check-label">Operativo</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">INGRESAR LA MARCA</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="marca" value="VEXIA" {{($rev->marca=="VEXIA")? "checked" : "" }}>
                                                <label class="form-check-label">VEXIA</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="marca" value="ADVANCE" {{($rev->marca=="ADVANCE")? "checked" : "" }}>
                                                <label class="form-check-label">ADVANCE</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">INGRESAR EL MODELO</label><code> *</code><br>
                                            <code>Texto en letras MAYUSCULAS</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="modelo" value="{{$rev->modelo}}" checked>
                                                <label class="form-check-label">SP5730</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nº DE SERIE </label><code> *</code>
                                            <input type="text" class="form-control" name="n_serie" value="{{$rev->n_serie}}" maxlength="11" minlength="11" placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">A QUE NUMERO DE PALET PERTENECE</label><code> *</code>
                                            <input type="number" class="form-control" name="n_palet" value="{{$rev->n_palet}}" required>
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
                                                <input class="form-check-input" type="radio" name="embalaje" value="SI" {{($rev->embalaje=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="embalaje" value="NO" {{($rev->embalaje=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El Case esta en buen estado</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="case_revision" value="SI" {{($rev->case_revision=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="case_revision" value="NO" {{($rev->case_revision=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Tablet enciende</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tablet_enciende" value="SI" {{($rev->tablet_enciende=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tablet_enciende" value="NO" {{($rev->tablet_enciende=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con Cargador y Cable de alimentación original y en perfecto funcionamiento</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cargador_cable" value="SI" {{($rev->cargador_cable=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cargador_cable" value="NO" {{($rev->cargador_cable=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cargador_cable" value="OMITIR" {{($rev->cargador_cable=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con Baterías en buen estado</label><code> *</code><br>
                                            <code>se verifica la retención de carga</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bateria" value="SI" {{($rev->bateria=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bateria" value="NO" {{($rev->bateria=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bateria" value="OMITIR" {{($rev->bateria=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Puerto USB o micro USB</label><code> *</code><br>
                                            <code>En el caso de ser micro USB debe contar con cable adaptador (otg)</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="puerto_micro_usb" value="SI" {{($rev->puerto_micro_usb=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="puerto_micro_usb" value="NO" {{($rev->puerto_micro_usb=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="puerto_micro_usb" value="OMITIR" {{($rev->puerto_micro_usb=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Ranura para memoria externa microSD</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microsd" value="SI" {{($rev->microsd=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microsd" value="NO" {{($rev->microsd=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microsd" value="OMITIR" {{($rev->microsd=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Pantalla de 10.1" en buen estado</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pantalla" value="SI" {{($rev->pantalla=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pantalla" value="NO" {{($rev->pantalla=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pantalla" value="OMITIR" {{($rev->pantalla=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Resolución de pantalla es</label><code> *</code><br>
                                            <code>Si es OTRA, indicar la resolución</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="resolucion" value="800 x 1280" {{($rev->resolucion=="800 x 1280")? "checked" : "" }}>
                                                <label class="form-check-label">800 x 1280</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="resolucion" value="1920 x 1080" {{($rev->resolucion=="1920 x 1080")? "checked" : "" }}>
                                                <label class="form-check-label">1920 x 1080</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="resolucion" value="OMITIR" {{($rev->resolucion=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene CPU de cuatro núcleos o Quad Core</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nucleos" value="SI" {{($rev->nucleos=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nucleos" value="NO" {{($rev->nucleos=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nucleos" value="OMITIR" {{($rev->nucleos=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tiene Velocidad de CPU de 1.8 GHz</label><code> *</code><br>
                                            <code>Si es OTRA, indicar SOLO la cantidad de GHz. (el número) ej. 1.2</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="velocidad_cpu" value="SI" {{($rev->velocidad_cpu=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="velocidad_cpu" value="NO" {{($rev->velocidad_cpu=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="velocidad_cpu" value="OMITIR" {{($rev->velocidad_cpu=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Memoria RAM instalada</label><code> *</code><br>
                                            <code>Si es OTRA, indicar SOLO la cantidad de GB. (el número) ej. 4</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_ram" value="2 GB" {{($rev->memoria_ram=="2 GB")? "checked" : "" }}>
                                                <label class="form-check-label">2 GB</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_ram" value="NO" {{($rev->memoria_ram=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_ram" value="OMITIR" {{($rev->memoria_ram=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Memoria de almacenamiento</label><code> *</code><br>
                                            <code>Si es OTRA, indicar SOLO la cantidad de GB. (el número) ej. 16</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_almace" value="32 GB" {{($rev->memoria_almace=="32 GB")? "checked" : "" }}>
                                                <label class="form-check-label">32 GB</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_almace" value="NO" {{($rev->memoria_almace=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="memoria_almace" value="OMITIR" {{($rev->memoria_almace=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Cámara frontal funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_frontal" value="SI" {{($rev->camara_frontal=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_frontal" value="NO" {{($rev->camara_frontal=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_frontal" value="OMITIR" {{($rev->camara_frontal=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Cámara trasera funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_trasera" value="SI" {{($rev->camara_trasera=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_trasera" value="NO" {{($rev->camara_trasera=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="camara_trasera" value="OMITIR" {{($rev->camara_trasera=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El Flash de la Cámara trasera funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flash" value="SI" {{($rev->flash=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flash" value="NO" {{($rev->flash=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flash" value="OMITIR" {{($rev->flash=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Conexión WI FI 802.1 1 b/g/n funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wifi" value="SI" {{($rev->wifi=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wifi" value="NO" {{($rev->wifi=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wifi" value="OMITIR" {{($rev->wifi=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">La Conexión Bluetooth funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bluetooth" value="SI" {{($rev->bluetooth=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bluetooth" value="NO" {{($rev->bluetooth=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bluetooth" value="OMITIR" {{($rev->bluetooth=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El parlante y la conexión de auriculares funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="parlantes_auriculares" value="SI" {{($rev->parlantes_auriculares=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="parlantes_auriculares" value="NO" {{($rev->parlantes_auriculares=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="parlantes_auriculares" value="OMITIR" {{($rev->parlantes_auriculares=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">El microfono incorporado funciona</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microfono" value="SI" {{($rev->microfono=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microfono" value="NO" {{($rev->microfono=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="microfono" value="OMITIR" {{($rev->microfono=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con FUNDA en buen estado</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="funda" value="SI" {{($rev->funda=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="funda" value="NO" {{($rev->funda=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="funda" value="OMITIR" {{($rev->funda=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cuenta con Teclado en perfecto funcionamiento</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="teclado" value="SI" {{($rev->teclado=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="teclado" value="NO" {{($rev->teclado=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="teclado" value="OMITIR" {{($rev->teclado=="OMITIR")? "checked" : "" }}>
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
                                                <input class="form-check-input" type="radio" name="version" value="9" {{($rev->version=="9")? "checked" : "" }}>
                                                <label class="form-check-label">9</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="version" value="OMITIR" {{($rev->version=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Se revisó la Configuración y arranque inicial</label><code> *</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="configuracion" value="SI" {{($rev->configuracion=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="configuracion" value="NO" {{($rev->configuracion=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="configuracion" value="OMITIR" {{($rev->configuracion=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Se realizo la Verificación de Aplicaciones Básicas instaladas</label><code> *</code><br>
                                            <code>Indique si realizó la verificación de las aplicaciones instaladas</code>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="veri_apk" value="SI" {{($rev->veri_apk=="SI")? "checked" : "" }}>
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="veri_apk" value="NO" {{($rev->veri_apk=="NO")? "checked" : "" }}>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="veri_apk" value="OMITIR" {{($rev->veri_apk=="OMITIR")? "checked" : "" }}>
                                                <label class="form-check-label">Omitir</label>
                                            </div>
                                        </div>

{{--                                        <input type="hidden" name="comyob_hardware" value="null">--}}
{{--                                        <input type="hidden" name="comyob_software" value="null">--}}
{{--                                        <input type="hidden" name="estado" value="1">--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Editar" class="btn btn-warning">
                        <a href="{{url('revision')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--    <div class="row mt-4">--}}
{{--        <div class="col-lg-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <strong>Modificar administrador</strong>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{url('revision/'.$rev->id_revision}}" method="POST" >--}}
{{--                        @method('PATCH')--}}
{{--                        {{ csrf_field() }}--}}
{{--                        @if (count($errors)>0)--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <p>Corregir los siguientes campos:</p>--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{$error}}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-md-1 col-form-label">DNI</label>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <input class="form-control" id="" type="text" name="trab_dni" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$trab->trab_dni}}" required readonly>--}}
{{--                            </div>--}}
{{--                            <label class="col-md-1 col-form-label">Apellidos</label>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <input class="form-control" id="" type="text" name="trab_ape" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$trab->trab_ape}}" required readonly>--}}
{{--                            </div>--}}
{{--                            <label class="col-md-1 col-form-label">Nombres</label>--}}
{{--                            <div class="col-md-3">--}}
{{--                                <input class="form-control" id="" type="text" name="trab_nom" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$trab->trab_nom}}" required readonly>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-md-1 col-form-label">Teléfono</label>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <input class="form-control" id="telef" onKeyPress="return soloNumeros(event)" onKeyUp="pierdeFoco(this)" type="text" name="trab_tel"  maxlength="9" value="{{$trab->trab_tel}}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-actions">--}}
{{--                            <input type="submit" value="Editar" class="btn btn-warning">--}}
{{--                            <a href="{{url('revision')}}" class="btn btn-danger">Cancelar</a>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
