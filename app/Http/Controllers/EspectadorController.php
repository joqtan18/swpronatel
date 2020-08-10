<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;
use App\RoleUser;
use App\Trabajador;

class EspectadorController extends Controller
{
    public function index()
    {
        $data = DB::table('trabajador')
            ->join('role_user','role_user.user_id','trabajador.trab_user')
            ->where('role_user.role_id','=','3')
            ->get();
        return view ('espectador.index',['data'=>$data]);
    }
    public function create()
    {
        return view('espectador.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'trab_dni' => 'required|unique:trabajador,trab_dni|numeric|digits:8',
            'trab_ape' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'trab_nom' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'trab_sexo' => 'required',
            'trab_fnac' => 'required'
        ]);
        $data = $request->all();
        User::create([
            'id' => $data['trab_dni'],
            'usuario' => $data['trab_dni'],
            'password' => Hash::make($data['trab_dni']),
        ]);
        $rol = RoleUser::create([
            'user_id' => $data['trab_dni'],
            'role_id' => '3'
        ]);
        $trab = Trabajador::create([
            'trab_dni' => $data['trab_dni'],
            'trab_ape' => $data['trab_ape'],
            'trab_nom' => $data['trab_nom'],
            'trab_sexo' => $data['trab_sexo'],
            'trab_fnac' => $data['trab_fnac'],
            'trab_email' => $data['trab_email'],
            'trab_tel' => $data['trab_tel'],
            'trab_user' => $data['trab_dni']
        ]);
        return redirect()->route('espectador.index')->with('status', 'Espectador agregado(a) correctamente!');
    }
    public function edit(Espectador $espectador)
    {
        //
    }
    public function update(Request $request, Espectador $espectador)
    {
        //
    }
    public function destroy($id)
    {
        $trab = Trabajador::find($id);
        if($trab->trab_est == 1){
            $trab->trab_est = 0;
            $trab->save();
            return redirect()->route('espectador.index')->with('status', 'Se cambio el estado del Espectador Inactivo');
        } else {
            $trab->trab_est = 1;
            $trab->save();
            return redirect()->route('espectador.index')->with('status', 'Se cambio el estado del Espectador Activo');
        }
    }
}
