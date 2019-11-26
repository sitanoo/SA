@extends('layout')
@section('conteudo')

<script>
    function editUsuario(url) {

    dados = $('#formEdit').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            //Mensagem de sucesso
            location.href = '/usuario';
            },
            error: function (argument) {
            //Mensagem de erro
            alert('Usuario não Alterado');
            }
    });
    return false
    }
</script>


<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i>Editar Usuário</h5>
        </div>
    </div>
    <div class="card">
        <form class="form-horizontal" id="formEdit" action="" onsubmit="return editUsuario('{{ route('usuario.update', $usuario->UsuCod) }}')">

            @csrf
            @method('patch')

            <div class="card-body">
                
                <div class="form-group row">
                    <label for="usutip" class="col-sm-3 text-left control-label col-form-label">Tipo de usuário</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="usuTip" value="{{$usuario->UsuTip}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="usuname" class="col-sm-3 text-left control-label col-form-label">Nome da Conta</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="usuName" value="{{$usuario->UsuName}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="usunom" class="col-sm-3 text-left control-label col-form-label">Nome</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="usuNom" value="{{$usuario->UsuNom}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="ususen" class="col-sm-3 text-left control-label col-form-label">Senha</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="usuSen" value="{{$usuario->UsuSen}}">
                    </div>
                </div>
                
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>



@stop