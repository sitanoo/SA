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
<div class="col-12">

    <a id="adicionar" href="{{route('sequencia.create')}}" type="button" 
       class="btn btn-outline-success">
        Adicionar Sequência
    </a>
    <br/>
    <br/>

    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light">
                <i class="mdi mdi-shopping"></i> Usuários</h5>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cod. Ope.</th>
                    <th scope="col">Cod. Prod.</th>
                    <th scope="col">Rítimo</th>
                    <th scope="col">Int</th>
                    <th scope="col">Cont.</th>
                    <th scope="col">Qntd. p/</th>
                    <th scope="col">Qntd. p/ Seq.</th>
                </tr>

                @foreach ($seq as $s)

                <tr id="linhadel{{$s->SeqCod}}">
                    <td scope="col">{{$s->SeqCod}}</td>
                    <td scope="col">{{$s->SeqNom}}</td>
                    <td scope="col">{{$s->OpCod}}</td>
                    <td scope="col">{{$s->ProCod}}</td>
                    <td scope="col">{{$s->SeqRit}}</td>
                    <td scope="col">{{$s->SeqInt}}</td>
                    <td scope="col">{{$s->SeqCon}}</td>
                    <td scope="col">{{$s->SeqQtdVez}}</td>
                    <td scope="col">{{$s->SeqPorPec}}</td>
                    <td class="text-center" scope="col">

                        <a id="editar" href="{{route('sequencia.edit', $s->SeqCod)}}" 
                           type="button" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i></a>

                        <a id="excluir" href="#" onclick="return delSequencia('del{{$s->SeqCod}}', '{{route('sequencia.destroy', $s->SeqCod)}}')" 
                           type="button" 
                           class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></a>
                        <form action="" method="post" id="del{{$s->SeqCod}}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>
</div>





@stop
