<?php

namespace App\Http\Controllers;

use App\Ingeniero;
use Illuminate\Http\Request;

class IngenieroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ingeniero.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingeniero  $ingeniero
     * @return \Illuminate\Http\Response
     */
    public function show(Ingeniero $ingeniero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingeniero  $ingeniero
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingeniero $ingeniero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingeniero  $ingeniero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingeniero $ingeniero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingeniero  $ingeniero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingeniero $ingeniero)
    {
        //
    }
}
