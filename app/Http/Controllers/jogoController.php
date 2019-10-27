<?php

namespace App\Http\Controllers;

use App\Jogo;
use App\Estadio;
use Illuminate\Http\Request;

class jogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogos = Jogo::all();
        $estadio = Estadio::all();
        return view('home', compact('jogos, estadio'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadio = Estadio::all();
        return view('cadastro-jogos', compact('estadio'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jogo = new jogo();
        $jogo->time1 = $request->input("time1");
        $jogo->time2 = $request->input("time2");
        $jogo->foto1 = $request->input("foto1");
        $jogo->foto2 = $request->input("foto2");
        $jogo->horario = $request->input("horario");
        $jogo->data = $request->input("data");
        $jogo->estadio_id = $request->input("estadio_id");
        $jogo->localizacao = $request->input("localizacao");
        
        $jogo->save();
        return redirect()->route('jogos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function show(jogo $jogo)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function edit(jogo $jogo)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jogo $jogo)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(jogo $jogo)
    {
        //
    }
}
