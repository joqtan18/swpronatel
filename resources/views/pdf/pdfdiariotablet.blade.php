<!DOCTYPE html>
<html  lang="en">
<table style="height: 102px;" width="529">
    <tbody>
    <tr>
        <td style="width: 256.8px;"><img src="{{asset('img/logo-pronatel.png')}}" height="75px"></td>
        <td style="width: 257.6px; text-align: center;">
            <H5>
                <center>
                    "Año de la Universalización de la Salud"
                </center>
            </H5>
        </td>
    </tr>
    </tbody>
</table>
<head>
    <meta charset="utf-8">
    <title>Reporte de Tablets</title>
    <meta name="viewport" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div>
    <table style="margin-left: auto; margin-right: auto;" border="1">
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
</div>
</body>
</html>

{{--<h1>udhsauihdihadas {{$hora}}</h1>--}}
{{--<table border="1">--}}
{{--    <thead>--}}
{{--        <tr>--}}
{{--            <th>ITEM</th>--}}
{{--            <th>Nombres y Apellidos</th>--}}
{{--            <th>Observada</th>--}}
{{--            <th>Operativa</th>--}}
{{--            <th>Total General</th>--}}
{{--        </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    {{$num=1}}--}}
{{--        @foreach($data as $d)--}}
{{--            <?php--}}
{{--            $trab= DB::table('trabajador')--}}
{{--                ->where('trab_user','=',$d->usuario)--}}
{{--                ->first();--}}
{{--            ?>--}}
{{--            <?php--}}
{{--            $ob= DB::table('revision')--}}
{{--                ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$hora)--}}
{{--                ->where('usuario','=',$d->usuario)--}}
{{--                ->where('estado','=','1')--}}
{{--                ->count();--}}
{{--            ?>--}}
{{--            <?php--}}
{{--            $op= DB::table('revision')--}}
{{--                ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$hora)--}}
{{--                ->where('usuario','=',$d->usuario)--}}
{{--                ->where('estado','=','0')--}}
{{--                ->count();--}}
{{--            ?>--}}
{{--            <?php--}}
{{--                $total=$ob+$op;--}}
{{--            ?>--}}
{{--        <tr>--}}
{{--            <td>{{$num}}</td>--}}
{{--            <td>{{$trab->trab_nom}}</td>--}}
{{--            <td>{{$ob}}</td>--}}
{{--            <td>{{$op}}</td>--}}
{{--            <td>{{$total}}</td>--}}
{{--        </tr>--}}
{{--            {{$num++}}--}}
{{--        @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
