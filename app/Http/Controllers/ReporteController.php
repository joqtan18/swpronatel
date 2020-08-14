<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajador;

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
}
