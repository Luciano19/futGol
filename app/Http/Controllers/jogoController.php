<?php

namespace App\Http\Controllers;

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
        return view('home', compact('jogos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrar_jogos');
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
        $jogo->nome = $request->input("nome");
        $jogo->time = $request->input("nome");
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
