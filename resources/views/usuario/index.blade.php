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
                                        <a href="/usuario/create" type="button" class="btn btn-outline-success">Adicionar usuário</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">*Nome pessoa*</th>
                                    <th >*Nome de usuário*</th>
                                    <th scope="col">*tipo*</th>
                                    <th scope="col">
                                        <a href="/usuario/2/edit" type="button" class="btn btn-outline-info">Editar</a>
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