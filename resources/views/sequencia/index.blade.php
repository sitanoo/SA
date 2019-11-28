@extends('layout')
@section('conteudo')



<script>

    function delSequencia(id, url){

    confirma = confirm("Deseja realmente eliminar o esta sequência ?");
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
            alert('Sequência não eliminada');
            }
    });
    }

    return false;
    }
</script>
<div class="col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Usuários</h5>
        </div>
        <table>
            <tr>
                
            </tr>
        </table>
        <table class="table">
            <thead>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Cod. Ope.</th>
                <th scope="col">Cod. Prod.</th>
                <th scope="col">Rítimo</th>
                <th scope="col">Cont.<th>
                <th scope="col">Qntd. p/<th>
                <th scope="col">Qntd. p/ Seg.<th>
                    <a href="{{route('sequencia.create')}}" type="button" class="btn btn-outline-success">Adicionar Tomada de Tempo</a>
                </th>
            </thead>
            <tbody>

                @foreach ($seq as $s)
                
                <tr class="text-center" id="linhadel{{$s->SeqCod}}">
                    <th scope="col">{{$s->SeqCod}}</th>
                    <th scope="col">{{$s->SeqNom}}</th>
                    <th scope="col">{{$s->OpCod}}</th>
                    <th scope="col">{{$s->ProCod}}</th>
                    <th scope="col">{{$s->SeqRit}}</th>
                    <th scope="col">{{$s->SeqInt}}</th>
                    <th scope="col">{{$s->SeqCon}}</th>
                    <th scope="col">{{$s->SeqQtdVez}}</th>
                    <th scope="col">{{$s->SeqPorSec}}</th>

                    <th scope="col">
                        <a href="{{route('sequencia.edit', $s->SeqCod)}}" type="button" class="btn btn-outline-info">Editar</a>
                    </th>
                    <th scope="col">
                        <a href="#" onclick="return delSequencia('del{{$s->SeqCod}}', '{{route('sequencia.destroy', $s->SeqCod)}}')" type="button" class="btn btn-outline-danger">Excluir</a>
                        <form action="" method="post" id="del{{$s->SeqCod}}">
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