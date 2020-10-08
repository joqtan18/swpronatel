<?php
    $trab_data = DB::table('trabajador')
        ->join('role_user','role_user.user_id','trabajador.trab_dni')
        ->join('roles','roles.id','role_user.role_id')
        ->where('trabajador.trab_dni','=',Auth::user()->usuario)->first();

    $total = DB::table('revision')->count();
    $totalop = DB::table('revision')->where('estado','=','0')->count();
    $totalob = DB::table('revision')->where('estado','=','1')->count();

    $totaling = DB::table('revision')->where('revision.usuario','=',Auth::user()->usuario)->count();
    $totaloping = DB::table('revision')->where('estado','=','0')->where('revision.usuario','=',Auth::user()->usuario)->count();
    $totalobing = DB::table('revision')->where('estado','=','1')->where('revision.usuario','=',Auth::user()->usuario)->count();
?>
@extends('plantilla.plantilla')
@section('contenido')
{{--    Inicio del Home Administrador--}}
    @if(Auth::user()->hasrole('admin'))
        @if($trab_data->trab_est == 1)
            <div class="card my-2">
                <div class="card-header py-2">
                    <div class="d-sm-flex align-items-center justify-content-between my-1">
                        <h1 class="h4 mb-0 text-gray-800">Bienvenido(a) : {{$trab_data->trab_ape.', '.$trab_data->trab_nom}} </h1>
                        <h2 class="h4 mb-0 text-gray-800">Cargo: {{$trab_data->description}}  </h2>
                        <!-- inicio reloj -->
                    {{--                <form name="form_reloj">--}}
                    {{--                    <input type="text" name="reloj" size="10">--}}
                    {{--                </form>--}}
                    <!-- fin reloj -->
                    </div>
                </div>
            </div>
            <!-- Content Wrapper. Contains page content -->

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{$total}}</h3>

                                        <p>TOTAL DE TABLETS</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
{{--                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
{{--                                        <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                                        <h3>{{$totalop}}</h3>
                                        <p>TABLETS OPERATIVAS</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
{{--                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                                </div>
                            </div>

                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>{{$totalob}}</h3>

                                        <p>TABLETS OBSERVADAS</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
{{--                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->
                            <section class="col-lg-5 connectedSortable">
contenido de seccion
                            </section>

                        </div>

                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->

            <!-- /.content-wrapper -->
        @else
            <div class="d-sm-flex align-items-center justify-content-between my-4">
                <h1 class="h4 mb-0 text-gray-800">No tienes acceso </h1>
            </div>
        @endif
    @endif
{{--    Fin del Home Administrador--}}
{{--Inicio del Home Ingeniero--}}
    @if(Auth::user()->hasrole('ing'))
        @if($trab_data->trab_est == 1)
            <div class="card my-2">
                <div class="card-header py-2">
                    <div class="d-sm-flex align-items-center justify-content-between my-1">
                        <h1 class="h4 mb-0 text-gray-800">Bienvenido(a) : {{$trab_data->trab_ape.', '.$trab_data->trab_nom}} </h1>
                        <h2 class="h4 mb-0 text-gray-800">Cargo: {{$trab_data->description}}  </h2>
                        <!-- inicio reloj -->
                    {{--                <form name="form_reloj">--}}
                    {{--                    <input type="text" name="reloj" size="10">--}}
                    {{--                </form>--}}
                    <!-- fin reloj -->
                    </div>
                </div>

            </div>

            <!-- Content Wrapper. Contains page content -->

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$totaling}}</h3>

                                    <p>TOTAL DE TABLETS</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{--                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    {{--                                        <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                                    <h3>{{$totaloping}}</h3>
                                    <p>TABLETS OPERATIVAS</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                {{--                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{$totalobing}}</h3>

                                    <p>TABLETS OBSERVADAS</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                {{--                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">
                            contenido de seccion
                        </section>

                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->

            <!-- /.content-wrapper -->
        @else
            <div class="d-sm-flex align-items-center justify-content-between my-4">
                <h1 class="h4 mb-0 text-gray-800">No tienes acceso </h1>
            </div>
        @endif
    @endif
{{--Fin del Home Ingeniero--}}
{{--Inicio del Home Espectador--}}
    @if(Auth::user()->hasrole('espe'))
        @if($trab_data->trab_est == 1)
            <div class="card my-2">
                <div class="card-header py-2">
                    <div class="d-sm-flex align-items-center justify-content-between my-1">
                        <h1 class="h4 mb-0 text-gray-800">Bienvenido(a) : {{$trab_data->trab_ape.', '.$trab_data->trab_nom}} </h1>
                        <h2 class="h4 mb-0 text-gray-800">Cargo: {{$trab_data->description}}  </h2>
                        <!-- inicio reloj -->
                    {{--                <form name="form_reloj">--}}
                    {{--                    <input type="text" name="reloj" size="10">--}}
                    {{--                </form>--}}
                    <!-- fin reloj -->
                    </div>
                </div>
            </div>
        @else
            <div class="d-sm-flex align-items-center justify-content-between my-4">
                <h1 class="h4 mb-0 text-gray-800">No tienes acceso </h1>
            </div>
        @endif
    @endif
{{--    Fin del Home Espectador--}}
@endsection
@section('scripts')
@endsection
