<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SequenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sequencia = \App\Sequencia::get();
        return view('sequencia.index', compact('sequencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sequencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sequencia = new \App\Sequencia();
        
        $sequencia->SeqNom = $request->get('SeqNom');
            $sequencia->OpCod = $request->get('OpCod');
          $sequencia->ProCod = $request->get('ProCod');
           $sequencia->SeqRit = $request->get('SeqRit');
           $sequencia->SeqInt = $request->get('SeqInt');
           $sequencia->SeqCon = $request->get('SeqCon');
           $sequencia->SeqQtdVez = $request->get('SeqQtdVez');
           $sequencia->SeqPorPec = $request->get('SeqPorPec');
           
        $sequencia->save();
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
       $usuario = \App\Usuario::find($id);
        return view('usuario.edit', compact('usuario'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
