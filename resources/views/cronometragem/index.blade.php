@extends('layout')
@section('conteudo')
<!-- Conteúdo  -->


<script>
    var timer = new easytimer.Timer();
    timer.start();
    timer.addEventListener('secondsUpdated', function (e) {
        $('#basicUsage').html(timer.getTimeValues().toString());
    });
    $('#chronoExample .startButton').click(function () {
        timer.start();
    });
    $('#chronoExample .pauseButton').click(function () {
        timer.pause();
    });
    $('#chronoExample .stopButton').click(function () {
        timer.stop();
    });
    $('#chronoExample .resetButton').click(function () {
        timer.reset();
    });
    timer.addEventListener('secondsUpdated', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });
    timer.addEventListener('started', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });
    timer.addEventListener('reset', function (e) {
        $('#chronoExample .values').html(timer.getTimeValues().toString());
    });
</script>
<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="container text-center">
                    <div id="chronoExample">
                        <div id="basicUsage">
                            <div class="values text-center">00:00:00</div>
                        </div>
                        <div>
                            <button class="startButton btn btn-outline-success btn-lg">Iniciar</button>
                            <button class="pauseButton btn btn-outline-danger btn-lg">Pausar</button>
                            <button class="resetButton btn btn-outline-dark btn-lg">Zerar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop    