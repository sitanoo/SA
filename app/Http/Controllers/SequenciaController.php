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
        $seq = \App\Sequencia::get();
        return view('sequencia.index', compact('seq'));
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
        $seq = new \App\Sequencia();
       
        $seq->SeqNom = $request->get('SeqNom');
        $seq->OpCod = $request->get('OpCod');
        $seq->ProCod = $request->get('ProCod');
        $seq->SeqRit = $request->get('SeqRit');
        $seq->SeqInt = $request->get('SeqInt');
        $seq->SeqCon = $request->get('SeqCon');
        $seq->SeqQtdVez = $request->get('SeqQtdVez');
        $seq->SeqPorPec = $request->get('SeqPorPec');
        $seq->save();
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
        $seq = \App\Sequencia::find($id);
        return view('sequencia.edit', compact('seq'));
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
        
        $seq = \App\Sequencia::find($id);
       
        $seq->SeqNom = $request->get('SeqNom');
        $seq->OpCod = $request->get('OpCod');
        $seq->ProCod = $request->get('ProCod');
        $seq->SeqRit = $request->get('SeqRit');
        $seq->SeqInt = $request->get('SeqInt');
        $seq->SeqCon = $request->get('SeqCon');
        $seq->SeqQtdVez = $request->get('SeqQtdVez');
        $seq->SeqPorPec = $request->get('SeqPorPec');
        $seq->save();
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
        
        $seq = \App\Sequencia::find($id);
        $seq->delete();
        return "true";
        
    }
}