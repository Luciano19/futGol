<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadios = Estadio::all();
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
        $estadio = new estadio();
        $estadio->nome = $request->input("nome");
        $estadio->endereco = $request->input("endereco");
        $estadio->foto = $request->input("foto_estadio");
        $estadio->capacidade = $request->input("capacidade");
        $estadio->save();
        return redirect()->route('estadios.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function show(Estadio $estadio)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadio $estadio)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadio  $Estadio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadio $estadio)
    {
       // 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadio $estadio)
    {
       //
    }
}
