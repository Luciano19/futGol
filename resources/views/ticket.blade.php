@extends('adminlte::page')
<html>
<head>
	<title>FutGol</title>
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
	@section('title', 'AdminLTE')

	@section('content_header')
	@stop

	@section('content')
	<div class="container-fluid teste">
	    <h1 id="titulo">Ingressos</h1>
	    <div class="container col-10 ">
	    	<div class="row">
			    <div class="col-5 ticket">
		    		<h3>Campeonato Brasileiro</h3>
		    		<h5>Maracanã | Rio de Janeiro - RJ</h5>
		    		<h5><b>28/09/2019 - 19:00h</b></h5>
		    		<div class="times">
		    			<h2>FLA <img src="../img/fototime/FLA.png" width="50"> X <img src="../img/fototime/SAO.png" width="52"> SPO </h2>
		    		</div>
		    		<div class="botao">
		    			<a class="btn btn-lg" href="/comprado1" role="button" id="botao-comprar"> Ver ingresso</a>
		    		</div>
			    </div>

		    	<div class="col-5 ticket">
		    		<h3>Campeonato Brasileiro</h3>
		    		<h5>Fonte nova | Salvador - BA</h5>
		    		<h5><b>25/09/2019 - 21:00h</b></h5>
		    		<div class="times">
					<h2>BA <img src="../img/fototime/BA.png"> X <img src="../img/fototime/CHA.png"> CHA </h2>
		    		</div>
		    		<div class="botao">
		    			<a class="btn btn-lg" href="/comprado1" role="button" id="botao-comprar"> Ver ingresso</a>
		    		</div>
		    	</div>
		    </div>
	    </div>
	</div>
	   
	@stop
</body>
