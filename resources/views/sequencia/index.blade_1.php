@extends('layout')
@section('conteudo')


          

                <div class="col-12" style="padding-left: 10px;">
                    <div class="card">
                        <div class="card-body bg-dark">
                            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Usuários</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <a href="/sequencia/create" type="button" class="btn btn-outline-success">Adicionar usuário</a>
                                    </th>
                                    <th scope="col">
                                        <a href="/sequencia/2/edit" type="button" class="btn btn-outline-info">Editar</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" type="button" class="btn btn-outline-danger">Excluir</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">*Codigo Sequencia*</th>
                                    <th scope="col">*Nome sequencia*</th>
                                    <th scope="col">*Codigo sequencia*</th>
                                    <th scope="col">*Codigo produto*</th>
                                    <th scope="col">*Ritmo sequencia*</th>
                                    <tr>
                                    <th scope="col">*SeqInt*</th>
                                    <th scope="col">*SeqCon*</th>
                                    <th scope="col">*Qntd sequencias*</th>
                                    <th scope="col">*Sequencias por seg*</th>
                                    </tr>
                                 
                                    
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


               
        
            
            @stop