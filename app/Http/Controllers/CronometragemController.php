<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller
{
    public function index () {
        return view('cronometragem.index');
    }
    
    public function getTomadaTempo(){
        $codigoTomadaTempo = $_GET ['cod'];
        $tomada = \App\TomadaTempo::where('TomCod', '=', $codigoTomadaTempo) -> get();
        
        return $tomada[0];
    }
    
    public function getSequencia(){
        $codigoOperacao = $_GET ['cod'];
        
        $sequencia = \App\Sequencia::where('OpCod', '=', $codigoOperacao) -> get();
        
        return $sequencia;
    }
    
    public function guardar(Request $request){
        $cronometragem = new \App\Cronometragem();
        $cronometragem->CroCod = $request->get('CroCod');
        
        $cronometragem->TomCod = $request->get('TomCod');
        
        $cronometragem->SeqCod = $request->get('SeqCod');
        
        $cronometragem->SeqCod = $request->get('SeqCod');
        
        $tempo = $request->get('CroTem');
        $tempo = str_replace(' ','', $tempo);
        
        $cronometragem->CroTem = $tempo;
        
        $cronometragem->save();
        
        return true;
        
        
        
    }
}


