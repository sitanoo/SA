@extends('layout')
@section('conteudo')

<script>

    function delProduto(id, url){

    confirma = confirm("Deseja realmente eliminar o usuario ?");
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
            alert('Usuario não eliminado');
            }
    });
    }

    return false;
    }
</script>


<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-account"></i> Usuários</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nome da Conta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">
                        <a href="{{route('usuario.create')}}" type="button" id="adicionar" class="btn btn-outline-success">Adicionar Usuário</a>
                    </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                 @foreach ($usuario as $u)

                <tr id="linhadel{{$u->UsuCod}}">
                    <th scope="col">{{$u->UsuCod}}</th>
                    <th scope="col">{{$u->UsuNom}}</th>
                    <th scope="col">{{$u->UsuName}}</th>
                    <th scope="col">{{$u->UsuTip}}</th>
                    <th scope="col">
                        <a href="{{route('usuario.edit', $u->UsuCod)}}" type="button" id="editar" class="btn btn-outline-info">Editar</a>
                    </th>
                    <th scope="col">
                        <a href="#" onclick="return delProduto('del{{$u->UsuCod}}', '{{route('usuario.destroy', $u->UsuCod)}}')" type="button" class="btn btn-outline-danger">Excluir</a>
                        <form action="" method="post" id="del{{$u->UsuCod}}">
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
