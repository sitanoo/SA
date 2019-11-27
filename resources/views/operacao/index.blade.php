@extends('layout')
@section('conteudo')
<!-- Conteúdo  -->


<script>
                    
    function delOperacao(id, url){
                        
        confirma = confirm("Deseja realmente eliminar a operação ?");
                        
        if(confirma){
                        
            dados = $('#'+id).serialize();

            $.ajax({
                method: 'post',
                url: url,
                data: dados,
                dataType: 'html',
                success: function (data) {
                    //Mensagem de sucesso
                    $('#linha'+id).remove();
                },
                error: function (argument){
                    //Mensagem de erro
                    alert('Operação não eliminada');
                }
            });

        }
                    
    return false;
                    
    }                   
</script>

<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Operações</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código Operação</th>
                    <th scope="col">>Nome Operação</th>
                    <th scope="col">Código Produto</th>
                    <th scope="col">Maquina de operação</th>
                    <th scope="col">*Tempo operação*</th>
                    <th scope="col">
                        <a href="{{route('operacao.create')}}" type="button" class="btn btn-outline-success">Adicionar Operação</a>
                    </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($operacao as $o)

                <tr id="linhadel{{$o->OpCod}}">
                    <th scope="col">{{$o->OpCod}}</th>
                    <th scope="col">{{$o->OpNom}}</th>
                    <th scope="col">{{$o->ProCod}}</th>
                    <th scope="col">{{$o->OpMaq}}</th>
                    <th scope="col">{{$o->OpCron}}</th>
                    <th scope="col">
                        <a href="{{route('operacao.edit', $o->ProCod)}}" type="button" class="btn btn-outline-info">Editar</a>
                    </th>
                    <th scope="col">
                        <a href="#" onclick="return delOperacao('del{{$o->ProCod}}', '{{route('operacao.destroy', $o->ProCod)}}')" type="button" class="btn btn-outline-danger">Excluir</a>
                        <form action="" method="post" id="del{{$p->ProCod}}">
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
<!-- Fim Conteúdo  -->
