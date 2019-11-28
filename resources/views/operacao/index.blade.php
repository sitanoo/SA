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
    <a href="{{route('operacao.create')}}" type="button" class="btn btn-outline-success">Adicionar Operação</a>
    <br>
    <br>
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i> Operações</h5>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Código Operação</th>
                    <th scope="col">Nome Operação</th>
                    <th scope="col">Código Produto</th>
                    <th scope="col">Maquina de operação</th>
                    <th scope="col">*Tempo operação*</th>
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
                    <th class="text-center" scope="col">
                        
                        <a href="{{route('operacao.edit', $o->ProCod)}}" 
                           type="button" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i></a>
                        <a href="#" onclick="return delOperacao('del{{$o->OpCod}}',\n\
                           '{{route('operacao.destroy', $o->OpCod)}}')" 
                           type="button" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></a>
                           
                        <form action="" method="post" id="del{{$o->OpCod}}">
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
