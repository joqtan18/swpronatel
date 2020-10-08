<?php
$total = DB::table('revision')->count();
$totalop = DB::table('revision')->where('estado','=','0')->count();
$totalob = DB::table('revision')->where('estado','=','1')->count();
?>
@extends('plantilla.plantilla')
@section('contenido')
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

                                <p>TOTAL DE TABLETS REVISADAS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
{{--                                <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                                <h3>{{$totalop}}</h3>
                                <p>TABLETS OPERATIVAS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                        </div>
                    </div>
                    <!-- ./col -->

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
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Left col -->
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">
                        TABLA DE REVISIONES
                        <hr>
                        <table style="margin-left: auto; margin-right: auto;" border="1" >
                            <thead>
                                <tr>
                                    <td style="text-align: center; background-color: #BDD7EE;" colspan="5">RESUMEN GENERAL DEL RESUMEN DE TABLETAS DEL: <b>{{date("d/m/Y", strtotime($hora))}}</b></td>
                                </tr>
                                <tr>
                                    <th style="text-align: center; background-color: #BDD7EE;">ITEM</th>
                                    <th style="text-align: center; background-color: #BDD7EE;">Nombres y Apellidos</th>
                                    <th style="text-align: center; background-color: #BDD7EE;">Observada</th>
                                    <th style="text-align: center; background-color: #BDD7EE;">Operativa</th>
                                    <th style="text-align: center; background-color: #BDD7EE;">Total General</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{$num=1}}
                            @foreach($data as $d)
                                <?php
                                $trab= DB::table('trabajador')
                                    ->where('trab_user','=',$d->usuario)
                                    ->first();
                                ?>
                                <?php
                                $ob= DB::table('revision')
                                    ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$hora)
                                    ->where('usuario','=',$d->usuario)
                                    ->where('estado','=','1')
                                    ->count();
                                ?>
                                <?php
                                $op= DB::table('revision')
                                    ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$hora)
                                    ->where('usuario','=',$d->usuario)
                                    ->where('estado','=','0')
                                    ->count();
                                ?>
                                <?php
                                $total=$ob+$op;
                                ?>
                                <tr>
                                    <td style="text-align: center;">{{$num}}</td>
                                    <td style="text-align: left;">{{$trab->trab_nom.', '.$trab->trab_ape}}</td>
                                    <td style="text-align: right;">{{$ob}}</td>
                                    <td style="text-align: right;">{{$op}}</td>
                                    <td style="text-align: right;">{{$total}}</td>
                                </tr>
                                {{$num++}}
                            @endforeach
                            </tbody>
                            <tfoot>
                            <?php
                            $totalob = DB::table('revision')
                                ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$hora)
                                ->where('estado','=','1')
                                ->count();
                            ?>
                            <?php
                            $totalop = DB::table('revision')
                                ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$hora)
                                ->where('estado','=','0')
                                ->count();
                            ?>
                            <?php
                            $totalgeneral = DB::table('revision')
                                ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$hora)
                                ->count();
                            ?>
                            <tr>
                                <th style="text-align: left; background-color: #BDD7EE;"></th>
                                <th style="text-align: left; background-color: #BDD7EE;">Total General</th>
                                <th style="text-align: right; background-color: #BDD7EE;">{{$totalob}}</th>
                                <th style="text-align: right; background-color: #BDD7EE;">{{$totalop}}</th>
                                <th style="text-align: right; background-color: #BDD7EE;">{{$totalgeneral}}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </section>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    <!-- /.content-wrapper -->
@endsection
@section('scripts')

@endsection
