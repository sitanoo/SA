<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TomadaTempoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tomtemp = \App\TomadaTempo::get();
        return view('tomadatempo.index', compact('tomtemp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tomadatempo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tomtemp = new \App\TomadaTempo();
       
        $tomtemp->TomDat = $request->get('TomDat');
        $tomtemp->TomTurno = $request->get('TomTurno');
        $tomtemp->OpCod = $request->get('OpCod');
        $tomtemp->ProCod = $request->get('ProCod');
        $tomtemp->TomNumlei = $request->get('TomNumLei');
        $tomtemp->TomOpe = $request->get('TomOpe');
        $tomtemp->TomObs = $request->get('TomObs');
        $tomtemp->save();
        return "true";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tomtemp = \App\Produto::find($id);
        return view('tomadatempo.edit', compact('tomtemp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $tomtemp = \App\Produto::find($id);
        
        $tomtemp->TomDat = $request->get('TomDat');
        $tomtemp->TomTurno = $request->get('TomTurno');
        $tomtemp->OpCod = $request->get('OpCod');
        $tomtemp->ProCod = $request->get('ProCod');
        $tomtemp->TomNumlei = $request->get('TomNumLei');
        $tomtemp->TomOpe = $request->get('TomOpe');
        $tomtemp->save();
        return "true";
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $tomtemp = \App\Produto::find($id);
        $tomtemp->delete();
        return "true";
        
    }
}
