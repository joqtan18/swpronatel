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

    public function observada(Request $request)
    {
        $data = $request->all();
        $aplicaciones = "";
        foreach ($data['lista_apk'] as $key => $value) {
//            $aplicaciones = $value.", ";
            $aplicaciones.=''.$value.',';
        }

        $obj = Revision::create([
            'marca'=> $data['marca'],
            'modelo'=> $data['modelo'],
            'n_serie'=> $data['n_serie'],
            'n_palet'=> $data['n_palet'],
            'embalaje'=> $data['embalaje'],
            'case_revision'=> $data['case_revision'],
            'cargador_cable'=> $data['cargador_cable'],
            'tablet_enciende'=> $data['tablet_enciende'],
            'bateria'=> $data['bateria'],
            'puerto_micro_usb'=> $data['puerto_micro_usb'],
            'microsd'=> $data['microsd'],
            'pantalla'=> $data['pantalla'],
            'resolucion'=> $data['resolucion'],
            'nucleos'=> $data['nucleos'],
            'velocidad_cpu'=> $data['velocidad_cpu'],
            'memoria_ram'=> $data['memoria_ram'],
            'memoria_almace'=> $data['memoria_almace'],
            'camara_frontal'=> $data['camara_frontal'],
            'camara_trasera'=> $data['camara_trasera'],
            'flash'=> $data['flash'],
            'wifi'=> $data['wifi'],
            'bluetooth'=> $data['bluetooth'],
            'parlantes_auriculares'=> $data['parlantes_auriculares'],
            'microfono'=> $data['microfono'],
            'funda'=> $data['funda'],
            'teclado'=> $data['teclado'],
            'version'=> $data['version'],
            'configuracion'=> $data['configuracion'],
            'veri_apk'=> $data['veri_apk'],
            'lista_apk'=> $aplicaciones,
            'comyob_hardware'=> $data['comyob_hardware'],
            'comyob_software'=> $data['comyob_software'],
            'usuario' => Auth::user()->usuario,
            'estado'=> $data['estado']

        ]);
        return redirect()->route('revision.index')->with('status', 'Tablet agregada correctamente!');
    }

    public function operativa(Request $request)
    {

    }
}
