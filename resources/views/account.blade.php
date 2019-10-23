@extends('adminlte::page')
<html>
<head>
	<title>FutGol</title>
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
	@section('title', 'AdminLTE')

	@section('content_header')
	@stop

	@section('content')
	<div class="container-fluid teste">
	    <h1 id="titulo">Meu perfil</h1>
	    <div class="boxperfil">
	    	<div id="foto">
	    		<img  class="vai" src="../img/perfil.jpg" >
	    	</div>
	    	<div class="dados">
	    		<h1>Jack Ferraz</h1>
				<h2 class="far fa-envelope"> fjaquionias@gmail.com</h2><br>
				<h2 class="fas fa-phone-alt"> +55 77 9 9919-7302</h2> <br>   		
	    	</div>
	    	
	    	<div id="linha">
	    	</div>

	    	<div class="editar">
	    		<br><h3 class="fas fa-user-alt"> Editar perfil</h3><br>
				<h3 class="fas fa-unlock-alt"> Alterar senha</h2><br>
				<h3 class="far fa-question-circle"> Central de ajuda</h2> <br>   		
	    	</div>

	    	
	 	</div>   	
	</div>
	   
	@stop
</body>
