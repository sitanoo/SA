@extends('layout')
@section('conteudo')
                <!-- Conteúdo  -->

                <script>
                    
                    dados = $('#'+id).serialize();
                
                    function delProdutos(id, url){
                    
                    $.ajax({
                        method: 'post',
                        url: '',
                        data: '',
                        dataType: 'html',
                        sucess: function (data) {
                            alert('Produto Eliminado');
                        },
                        error: function (argument){
                            alert('Produto não eliminado');
                        }
                        
                    });
                    
                    return false;
                    
                    }
                </script>

                <div class="col-12" style="padding-left: 10px;">
                    <div class="card">
                        <div class="card-body bg-dark">
                            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Produtos</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">
                                        <a href="{{route('produto.create')}}" type="button" class="btn btn-outline-success">Adicionar Produto</a>
                                    </th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($produto as $p)
                                <tr>
                                    <th scope="col">{{$p->ProCod}}</th>
                                    <th scope="col">{{$p->ProNom}}</th>
                                    <th scope="col">
                                        <a href="{{route('produto.edit', $p->ProCod)}}" type="button" class="btn btn-outline-info">Editar</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" onclick="return delProduto('del{{$p->ProCod}}',{{route('produto.destroy', $p->ProCod)}})" type="button" class="btn btn-outline-danger">Excluir</a>
                                        <form action="" method="post" id="del{{$p->ProCod}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </th>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="page-wrapper">
                    <div class="container-fluid">

                    </div>
                </div>

                @stop
                <!-- Fim Conteúdo  -->
