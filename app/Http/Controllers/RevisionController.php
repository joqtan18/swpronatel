<?php

namespace App\Http\Controllers;

use App\Revision;
use Auth;
use App\Trabajador;
use Illuminate\Http\Request;
use DB;

class RevisionController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasrole('admin'))
        {
            $data = DB::table('revision')
                ->join('trabajador','trabajador.trab_user','revision.usuario')
                ->get();
        } elseif(Auth::user()->hasrole('ing')){
            $data = DB::table('revision')
                ->join('trabajador','trabajador.trab_user','revision.usuario')
                ->where('revision.usuario','=',Auth::user()->usuario)
                ->get();
        }
        return view('revision.index',['data'=>$data]);
    }
    public function create()
    {
        return view('revision.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if ($data['estadotablet']==0){
            return view('revision.operativa');
        }else{
            return view('revision.observada');
        }
    }
    public function show(Revision $revision)
    {
        //
    }
    public function edit(Revision $revision)
    {
        //
    }
    public function update(Request $request, Revision $revision)
    {
        //
    }
    public function destroy(Revision $revision)
    {
        //
    }
}
