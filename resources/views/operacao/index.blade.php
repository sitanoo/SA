@extends('layout')
@section('conteudo')

<script>

    function delOperacao(id, url){

    confirma = confirm("Deseja realmente eliminar a operação ?");
    if (confirma){

    dados = $('#' + id).serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            //Mensagem de sucesso
            $('#linha' + id).remove();
            },
            error: function (argument){
            //Mensagem de erro
            alert('Operação não eliminada');
            }
    });
    }

    return false;
    }
</script>

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
                @foreach ($produto as $p)

                <tr id="linhadel{{$p->ProCod}}">
                    <th scope="col">{{$p->ProCod}}</th>
                    <th scope="col">{{$p->ProNom}}</th>
                    <th scope="col">
                        <a href="{{route('produto.edit', $p->ProCod)}}" type="button" class="btn btn-outline-info">Editar</a>
                    </th>
                    <th scope="col">
                        <a href="#" onclick="return delProduto('del{{$p->ProCod}}', '{{route('produto.destroy', $p->ProCod)}}')" type="button" class="btn btn-outline-danger">Excluir</a>
                        <form action="" method="post" id="del{{$p->ProCod}}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </th>
                </tr>

                @endforeach
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