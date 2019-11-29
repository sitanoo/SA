@extends('layout')
@section('conteudo')

<script>

    function createSequencia(url) {

    dados = $('#formCreate').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            //Mensagem de sucesso
            location.href = '/sequencia';
            },
            error: function (argument) {
            //Mensagem de erro
            alert('Sequência não adicionada');
            }
    });
    return false;
    }
</script>
<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-pencil"></i>Adicionar Sequência</h5>
        </div>
    </div>
    <div class="card">
        <form class="form-horizontal" id="formCreate" action="" onsubmit="return createSequencia('{{ route('sequencia.store') }}')">

            @csrf

            <div class="card-body">
                <div class="form-group row">
                    <label for="SeqNom" class="col-sm-3 text-left control-label col-form-label">Nome da Sequência</label>
                    <div class="col-sm-9">
                        <input type="text" name="SeqNom" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="Oppro" class="col-sm-3 text-left control-label col-form-label">Código operação</label>
                    <div class="col-sm-9">
                         <input type="text" name="OpCod"required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="ProCod" class="col-sm-3 text-left control-label col-form-label">Código produto</label>
                    <div class="col-sm-9">
                        <input type="text" name="ProCod" name="ProCod">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqRit" class="col-sm-3 text-left control-label col-form-label">Ritimo</label>
                    <div class="col-sm-9">
                        <input type="text"  name="SeqRit" name="SeqRit">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqCon" class="col-sm-3 text-left control-label col-form-label">Sequência Con.</label>
                    <div class="col-sm-9">
                        <input type="text" name="SeqCon" name="SeqCon">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqQtdVez" class="col-sm-3 text-left control-label col-form-label">Quantidade de vezes</label>
                    <div class="col-sm-9">
                        <input type="text"  name="SeqQtdVez" name="SeqQtdVez">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqInt" class="col-sm-3 text-left control-label col-form-label">Intervalo de Sequência</label>
                    <div class="col-sm-9">
                        <input type="text"  name="SeqInt" name="SeqInt">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqInt" class="col-sm-3 text-left control-label col-form-label">Sequência por peça</label>
                    <div class="col-sm-9">
                        <input type="text"  name="SeqPorPec" name="SeqporPec">
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