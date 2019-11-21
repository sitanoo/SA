@extends('layout')
@section('conteudo')



<div class="col-12" style="padding-left: 1px;">
                    <div class="card">
                        <div class="card-body bg-dark">
                            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i>Editar Operação</h5>
                        </div>
                        </div>
<!-- Form -->
<form class="form-horizontal m-t-20" action="index.html">
    <div class="row p-b-30">
        <div class="col-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                </div>
                <input type="text" class="form-control form-control-lg" placeholder="Código operação" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <!-- email -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                </div>
                <input type="text" class="form-control form-control-lg" placeholder="Nome operação" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                </div>
                <input type="text" class="form-control form-control-lg" placeholder="Maquina de operação" aria-label="text" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                </div>
                <input type="text" class="form-control form-control-lg" placeholder="Tempo operação" aria-label="text" aria-describedby="basic-addon1" required>
            </div>


        </div>
    </div>
    <div class="row border-top border-secondary">
        <div class="col-12">
            <div class="form-group">
                <div class="p-t-20">
                    <button class="btn btn-block btn-lg btn-info" type="submit">Editar</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>



@stop