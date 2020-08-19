<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajador;
use PDF;
use DB;

class ReporteController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }

    public function reportemensualExcel(Request $request)
    {
        return view('reporte.reportemensualexcel');
    }

    public function reportemensualGrafico(Request $request)
    {
        return view('reporte.reportemensualgrafico');
    }

    public function reportediarioPDF(Request $request)
    {
        return view('reporte.reportepdfdiario');
    }

    public function recebirreporteTablet(Request $req)
    {
        $data = $req->all();
        $hora = $data['ini_fecha'];
        $query= DB::table('revision')
            ->select(DB::raw('count(usuario) AS aa'),'usuario')
            ->join('trabajador','trabajador.trab_user','revision.usuario')
//            ->where(DB::raw(“DATE(hora) = ‘”.date(‘Y-m-d’).”‘”),'=',$data['ini_fecha'])
            ->where(DB::raw("(DATE_FORMAT(hora,'%Y-%m-%d'))"),$data['ini_fecha'])
//                ->where('hora','=','2020-08-17 18:09:18')
            ->groupBy('revision.usuario')
            ->orderBy('trabajador.trab_nom','asc')
            ->get();

        $pdf = PDF::loadView('pdf.pdfdiariotablet',['data'=>$query,'hora'=>$hora]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('Reporte:asistencia - Mensual.pdf');
    }
}
