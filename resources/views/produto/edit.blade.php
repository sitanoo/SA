@extends('layout')
@section('conteudo')
<script>

    function editProduto(url) {

    dados = $('#formEdit').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            //Mensagem de sucesso
            location.href = '/produto';
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
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i>Editar Produto</h5>
        </div>
    </div>
    <div class="card">
        <form class="form-horizontal" id="formEdit" action="" onsubmit="return editProduto('{{ route('produto.update', $produto->ProCod) }}')">
            
            @csrf
            @method('patch')
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="nompro" class="col-sm-3 text-left control-label col-form-label">Nome do Produto</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ProNom" value="{{$produto->ProNom}}">
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