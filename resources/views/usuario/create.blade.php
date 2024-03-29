@extends('layout')
@section('conteudo')

<script>

    function createUsuario(url) {

    dados = $('#formCreate').serialize();
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
            alert('Usuario não adicionado');
            }
    });
    return false;
    }
</script>

<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i>Adicionar Usuário</h5>
        </div>    
    </div>

    <div class="card">
        <form class="form-horizontal" id="formCreate" onsubmit="return createUsuario('{{ route('usuario.store') }}')">

            @csrf


            <div class="card-body">
                <div class="form-group row">
                    <label for="usunom" class="col-sm-3 text-left control-label col-form-label">Nome</label>
                    <div class="col-sm-9">
                        <input id="usuNom" type="text" class="form-control" name="usuNom" value="" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="usuname" class="col-sm-3 text-left control-label col-form-label">Nome da conta</label>
                    <div class="col-sm-9">
                        <input id="usuName" type="text" class="form-control" name="usuName" value="" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="usutip" class="col-sm-3 text-left control-label col-form-label">Tipo</label>
                    <div class="col-sm-9">
                        <input id="usuTip" type="text" class="form-control" name="UsuTip" value="" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="ususen" class="col-sm-3 text-left control-label col-form-label">Senha</label>
                    <div class="col-sm-9">
                        <input id="usuSen" type="text" class="form-control" name="UsuSen" value="" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="ususenh" class="col-sm-3 text-left control-label col-form-label">Confirmar Senha</label>
                    <div class="col-sm-9">
                        <input id="conSen" type="text" class="form-control" name="CSenha" value="" required>
                    </div>
                </div>
                
                <div class="border-top">
                    <div class="card-body">
                        <button id="adicionar" type="submit" class="btn btn-success">Adicionar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@stop
