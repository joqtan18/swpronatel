<?php

namespace App\Http\Controllers;

use App\Revision;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    public function index()
    {
        return view('revision.index');
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
