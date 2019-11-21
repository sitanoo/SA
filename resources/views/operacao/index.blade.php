@extends('layout')
@section('conteudo')


          
<div class="card">
                <div class="col-12" style="padding-left: 1px;">
                    <div class="card">
                        <div class="card-body bg-dark">
                            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Operação</h5>
                        </div>
                        </div>
                        <table class="table">
                            
                                <tr>
                                    <th scope="col">
                                        <a href="/operacao/create" type="button" class="btn btn-outline-success">Adicionar operação</a>
                                    </th>
                                </tr>
                            
                            <tbody>
                                <tr>
                                    <th scope="col">*Código Operação*</th>
                                    <th >*Nome Operação*</th>
                                    <th scope="col">*Código Produto*</th>
                                    <th scope="col">*Maquina de operação*</th>
                                    <th scope="col">*Tempo operação*</th>
                                    <th scope="col">
                                        <a href="/operacao/2/edit" type="button" class="btn btn-outline-info">Editar</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" type="button" class="btn btn-outline-danger">Excluir</a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
        </div>   
    
    


               
        
            
            @stop