<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('account', compact('jogos'));
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
     * @param  \App\usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $Usuario)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $Usuario)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $Usuario)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $Usuario)
    {
        //
    }
}
