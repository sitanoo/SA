@extends('layout')
@section('conteudo')


<script>
    function editSequencia(url) {

    dados = $('#formEdit').serialize();
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
            alert('Produto não Alterado');
            }
    });
    return false
    }
</script>
<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-pencil"></i>Editar Sequência</h5>
        </div>
    </div>
    <div class="card">
        <form class="form-horizontal" id="formEdit" action="" onsubmit="return editSequencia('{{ route('sequencia.update', $seq->SeqCod) }}')">

            @csrf
            @method('patch')

            <div class="card-body">
                <div class="form-group row">
                    <label for="SeqNom" class="col-sm-3 text-left control-label col-form-label">Nome da Sequência</label>
                    <div class="col-sm-9">
                        <input type="text" value="{{$seq->SeqNom}}" name="SeqNom" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="Oppro" class="col-sm-3 text-left control-label col-form-label">Código operação</label>
                    <div class="col-sm-9">
                         <input type="text" value="{{$seq->OpCod}}" name="OpCod"required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="ProCod" class="col-sm-3 text-left control-label col-form-label">Código produto</label>
                    <div class="col-sm-9">
                        <input type="text"  value="{{$seq->ProCod}}" name="ProCod" name="ProCod">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqRit" class="col-sm-3 text-left control-label col-form-label">Ritimo</label>
                    <div class="col-sm-9">
                        <input type="text"  value="{{$seq->SeqRit}}" name="SeqRit" name="SeqRit">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqCon" class="col-sm-3 text-left control-label col-form-label">Sequência Con.</label>
                    <div class="col-sm-9">
                        <input type="text" value="{{$seq->SeqCon}}" name="SeqCon" name="SeqCon">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqQtdVez" class="col-sm-3 text-left control-label col-form-label">Quantidade de vezes</label>
                    <div class="col-sm-9">
                        <input type="text"  value="{{$seq->SeqQtdVez}}" name="SeqQtdVez" name="SeqQtdVez">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqInt" class="col-sm-3 text-left control-label col-form-label">Intervalo de Sequência</label>
                    <div class="col-sm-9">
                        <input type="text"  value="{{$seq->SeqInt}}" name="SeqInt" name="SeqInt">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="SeqInt" class="col-sm-3 text-left control-label col-form-label">Sequência por peça</label>
                    <div class="col-sm-9">
                        <input type="text"  value="{{$seq->SeqPorPec}}" name="SeqPorPec" name="SeqporPec">
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