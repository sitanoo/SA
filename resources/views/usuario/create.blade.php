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

<div class="col-12" style="padding-left: 1px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i>Adicionar Usuario</h5>
        </div>
    </div>
    <!-- Form -->
    <form class="form-horizontal m-t-20" id="formCreate" onsubmit="return createUsuario('{{ route('usuario.store') }}')">
        
        @csrf
        
        <div class="row p-b-30">
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="usuName" placeholder="Nome" aria-describedby="basic-addon1" required>
                </div>
                <!-- email -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="usuNom" placeholder="Nome Usuário" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="UsuTip" placeholder="Tipo" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="UsuSen" placeholder="Senha" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="UsuTip" placeholder="Confirmar Senha" aria-describedby="basic-addon1" required>
                </div>

            </div>
        </div>
        <div class="row border-top border-secondary">
            <div class="col-12">
                <div class="form-group">
                    <div class="p-t-20">
                        <button class="btn btn-block btn-lg btn-info" type="submit">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



@stop