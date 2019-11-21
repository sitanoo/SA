@extends('layout')
@section('conteudo')


                <div class="col-12" style="padding-left: 10px;">
                    <div class="card">
                        <div class="card-body bg-dark">
                            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Tomadas de Tempo</h5>
                        </div>
                        <table class="table">
                            
                                <tr>
                                    <th scope="col">
                                        <a href="/tomadaTempo/create" type="button" class="btn btn-outline-success">Adicionar</a>
                                        
                                        <th scope="col">
                                        <a href="/tomadaTempo/2/edit" type="button" class="btn btn-outline-info">Editar</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" type="button" class="btn btn-outline-danger">Excluir</a>
                                    </th>
                                    </th>
                                </tr>
                            
                            <tbody>
                                <tr>
                                    <th scope="col">*Código tomada de tempo*</th>
                                    <th scope="col">*Data*</th>
                                    <th scope="col">*Turno*</th>
                                    <th scope="col">*Código operação*</th>
                                <tr>
                                    <th scope="col">*Código do produto*</th>
                                    <th scope="col">*Número da t.Operação*</th>
                                    <th scope="col">*Operação*</th>
                                    <th scope="col">*Observações*</th>
                                </tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                @stop