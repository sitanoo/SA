@extends('layout')
@section('conteudo')

<script>
    function editOperacao(url) {

    dados = $('#formEdit').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            //Mensagem de sucesso
            location.href = '/operacao';
            },
            error: function (argument) {
            //Mensagem de erro
            alert('Operacao não Alterada');
            }
    });
    return false
    }
</script>
<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i>Editar Operação</h5>
        </div>
    </div>
    <div class="card">
        <form class="form-horizontal" id="formEdit" action="" onsubmit="return editOperacao('{{ route('operacao.update', $operacao->OpCod) }}')">

            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group row">
                    <label for="ProCod" class="col-sm-3 text-left control-label col-form-label">Código do Produto</label>
                    <div class="col-sm-9">
                        <input name="ProCod" type="text" class="form-control" required value="{{$operacao->OpCod}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="OpNom" class="col-sm-3 text-left control-label col-form-label">Nome da Operação</label>
                    <div class="col-sm-9">
                        <input name="OpNom" type="text" class="form-control" required value="{{$operacao->OpNom}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="OpMaq" class="col-sm-3 text-left control-label col-form-label">Código da Máquina</label>
                    <div class="col-sm-9">
                        <input name="OpMaq" type="text" class="form-control" required value="{{$operacao->OpMaq}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="OpCron" class="col-sm-3 text-left control-label col-form-label">Cronometragem</label>
                    <div class="col-sm-9">
                        <input name="OpCron" type="text" class="form-control"  required value="{{$operacao->OpCron}}">
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