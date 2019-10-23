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
	    <h1 id="titulo">Comprar ingresso</h1>
	    <div class="container col-10 ">
	    	<div class="row">
			    <div class="col-10   ticket">
                    <div class="times">
                        <h2>FLA <img src="../img/fototime/FLA.png" width="50"> X <img src="../img/fototime/SAO.png" width="52"> SPO </h2>
                    </div>
		    		<h3>Campeonato Brasileiro</h3>
		    		<h5>Maracanã | Rio de Janeiro - RJ</h5>
		    		<h5><b>28/09/2019 - 19:00h</b></h5>
                    
                    
                    <div class="row">
                        <hr id="linha1" >
                    </div>

                    <div id="setores">
                        
                        <h3> Estádio	</h3>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1571594044057!6m8!1m7!1sF%3A-I53ltLcSbDU%2FVAt3o23-jxI%2FAAAAAAAAAAA%2FZm4Lj7yrbJs!2m2!1d-22.91313805566063!2d-43.23031111099294!3f4.2!4f0!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>	<div id="setores">
                        
                        <h3> Localização	</h3>

                    </div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14700.025245228044!2d-43.23031111099294!3d-22.91313805566063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e5dba888b0d%3A0xf5f33188ee6274e5!2zTWFyYWNhbsOj!5e0!3m2!1spt-BR!2sbr!4v1571593983599!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>



		    		
			    </div>

		    	
		    </div>
	    </div>
	</div>
	   
	@stop
</body>
