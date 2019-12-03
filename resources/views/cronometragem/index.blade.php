@extends('layout')
@section('conteudo')
<!-- Conteúdo  -->

<title>Cronómetro</title> 

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<style type="text/css">
    * { margin: auto; padding: 0; }
    h1 { padding: 0.5em; text-align: center; }
    #cronometro { padding:10px; border: 3px blue double; width: 500px;
                  text-align: center }
    #reloj {border: 1px solid black; 
            font: bold 1.5em digital, europa, arial; text-align: center;}
    #cronometro [type=button]  { margin: 4px; font: normal 9pt arial } 
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/cronometro.js" type="text/javascript"></script>

<h1>CRONOMETRO com Javascript</h1>

<div id="cronometro">
    <div id="reloj">00 : 00 : 00</div>
    <br/>
    <form name="cron" action="#">
        <input type="button" value="Iniciar" name="empieza" />
        <input type="button" value="Parar" name="para" /><br/>
        <input type="button" value="Continuar" name="continua" />
        <input type="button" value="Reiniciar" name="reinicia" />

        <br/><br/>

        <input type="button" value="Próximo >>" id="proximo" name="proximo" />

    </form>
    @stop    