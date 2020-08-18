<h1>udhsauihdihadas {{$hora}}</h1>
<table border="1">
    <thead>
        <tr>
            <th>ITEM</th>
            <th>Nombres y Apellidos</th>
            <th>Observada</th>
            <th>Operativa</th>
            <th>Total General</th>
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
            <td>{{$num}}</td>
            <td>{{$trab->trab_nom}}</td>
            <td>{{$ob}}</td>
            <td>{{$op}}</td>
            <td>{{$total}}</td>
        </tr>
            {{$num++}}
        @endforeach
    </tbody>
</table>
