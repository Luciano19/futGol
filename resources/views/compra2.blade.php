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
	<div class="container-fluid testecompra2">
	    <h1 id="titulo">Comprar ingresso</h1>
	    <div class="container">
	    	<div class="row">

			    <div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado norte superior  </label>
							<label>R$ 70,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				

				<div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado norte inferior  </label>
							<label>R$ 60,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				

				<div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado oeste superior  </label>
							<label>R$ 120,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				

				<div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado oeste inferior  </label>
							<label>R$ 80,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				

				<div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado Leste superior  </label>
							<label>R$ 110,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				

				<div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado leste inferior  </label>
							<label>R$ 60,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				
				<div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado norte superior  </label>
							<label>R$ 60,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				

				<div class="col-md-10 ticketcompra2">
					<div class="col-md-3" id="valores">
                            <label class="labelvalores">Lado sul inferior  </label>
							<label>R$ 50,00 </label>
							
					</div>
					
					<div class="col-md-9" id="quantidade">
						<input type="number" 	 placeholder="Quantidade"/>
						
					</div>							
				</div>
				
				
				<div id="botaocompra2">
						<label>Total: R$ 200</label>	
		    			<a id="botaocomprabotao2"class="btn btn-lg" href="/pagamento" role="button" id="botao-comprar">Prosseguir</a>
				</div>

			
				
			</div>
	    </div>
	</div>
	   
	@stop
</body>
