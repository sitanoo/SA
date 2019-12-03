@extends('layout')
@section('conteudo')

<script>
                    
    function delProduto(id, url){
                        
        confirma = confirm("Deseja realmente eliminar o produto ?");
                        
        if(confirma){
                        
            dados = $('#'+id).serialize();

            $.ajax({
                method: 'post',
                url: url,
                data: dados,
                dataType: 'html',
                success: function (data) {
                    //Mensagem de sucesso
                    $('#linha'+id).remove();
                },
                error: function (argument){
                    //Mensagem de erro
                    alert('Produto não eliminado (Elimine a operação relacionada a este produto para eliminá-lo")');
                }
            });

        }
                    
    return false;
                    
    }                   
</script>

<div class="main-content col-12" style="padding-left: 10px;">
    <a href="{{route('produto.create')}}" type="button" class="btn btn-outline-success">Adicionar Produto</a>
    <br>
    <br>
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Produtos</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($produto as $p)

                <tr id="linhadel{{$p->ProCod}}">
                    <th scope="col">{{$p->ProCod}}</th>
                    <th scope="col">{{$p->ProNom}}</th>
                    <th scope="col">
                        <a href="{{route('produto.edit', $p->ProCod)}}" type="button" class="btn btn-outline-info">Editar</a>
                    </th>
                    <th scope="col">
                        <a href="" onclick="return delProduto('del{{$p->ProCod}}', '{{route('produto.destroy', $p->ProCod)}}')" type="button" class="btn btn-outline-danger">Excluir</a>
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
@stop
