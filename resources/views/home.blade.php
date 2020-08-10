<?php
    $trab_data = DB::table('trabajador')
        ->join('role_user','role_user.user_id','trabajador.trab_dni')
        ->join('roles','roles.id','role_user.role_id')
        ->where('trabajador.trab_dni','=',Auth::user()->usuario)->first();
?>
@extends('plantilla.plantilla')
@section('contenido')
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
        @else
            <div class="d-sm-flex align-items-center justify-content-between my-4">
                <h1 class="h4 mb-0 text-gray-800">No tienes acceso </h1>
            </div>
        @endif
    @endif
@endsection
@section('scripts')
@endsection
