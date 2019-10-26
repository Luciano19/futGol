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
        <h1 id="titulo">Pagamento</h1>
        <div id="pagamento">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-credito-tab" data-toggle="tab" href="#nav-credito" role="tab" aria-controls="nav-credito" aria-selected="true">Crédito</a>
                <a class="nav-item nav-link " id="nav-debito-tab" data-toggle="tab" href="#nav-debito" role="tab" aria-controls="nav-debito" aria-selected="false">Débito</a>
                <a class="nav-item nav-link " id="nav-boleto-tab" data-toggle="tab" href="#nav-boleto" role="tab"  aria-controls="nav-boleto" aria selected="false">Boleto</a>
             </div>
        </nav>

         
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade in active" id="nav-credito" role="tabpanel" aria-labelledby="nav-credito-tab">
                    <input class="entradapagamento" name="cupom" required="required" type="text" placeholder=" Cupom de Desconto"/><br>
                    <input class="entradapagamento" name="numerocartao" required="required" type="text" placeholder=" Numero do Cartão"/><br>
                    <input class="entradapagamento" name="nometitutar" required="required" type="text" placeholder=" Nome do Titular como no Cartão"/><br>
                    
                    <div class="jociel">
                        <input class="mesanocod" name="mes" required="required" type="text" placeholder=" Mês"/>
                        <input class="mesanocod" name="ano" required="required" type="text" placeholder=" Ano"/>
                        <input class="mesanocod" id="codseg"name="codigoseguranca" required="required" type="text" placeholder="Cod. de Segurança"/>
                    </div>
                    
                    <select class="entradapagamento" name="parcelas" id="parcelas">
                        <option value="#" selected>Parcelamento</option>
                        <option value="1">1 x de R$ xxx</option>
                        <option value="2">2 x de R$ xxx</option>
                        <option value="3">3 x de R$ xxx</option>
                        <option value="4">4 x de R$ xxx</option>
                        <option value="5">5 x de R$ xxx</option>
                    </select>
                    <div id="botaocompra2">	
		    			<a id="botaopagamento" onclick="alert('Compra efetuada com sucesso!!')" class="btn btn-lg" href="/home" role="button" id="botao-comprar">Finalizar</a>
				    </div>
                </div>

                <div class="tab-pane fade " id="nav-debito" role="tabpane1" aria-labelledby="nav-debito-tab">
                    <input class="entradapagamento" name="cupom" required="required" type="text" placeholder=" Cupom de Desconto"/><br>
                    <input class="entradapagamento" name="numerocartao" required="required" type="text" placeholder=" Numero do Cartão"/><br>
                    <input class="entradapagamento" name="nometitutar" required="required" type="text" placeholder=" Nome do Titular como no Cartão"/><br>
                    <input class="mesanocod" name="mes" required="required" type="number" placeholder=" Mês"/><br>
                    <input class="mesanocod" name="ano" required="required" type="number" placeholder=" Ano"/><br>
                    <input class="mesanocod" name="codigoseguranca" required="required" type="number" placeholder=" Código de Segurança"/><br>

                    <div id="botaocompra2">	
		    			<a id="botaopagamento" onclick="alert('Compra efetuada com sucesso!!')" class="btn btn-lg" href="/home" role="button" id="botao-comprar">Finalizar</a>
				    </div>
                </div>

                <div class="tab-pane fade " id="nav-boleto" role="tabpane1" aria-labelledby="nav-boleto-tab">
                    <?php
                         $val1= rand(1,1314392412);
                         $val2=rand(1,1314392413);
                         $val= $val1.$val2;

                        
                    ?>
                    <p class="boleto">O boleto foi enviado por email</p>
                    <p class="boleto">Código do Boleto :</p>

                    <h1 class="boleto" id="randomboleto"><?= $val ?><h1>
                    <p class="boleto">O boleto deve ser pago em até 3 dias úteis</p>

                    <div id="botaocompra2">	
		    			<a id="botaopagamento" onclick="alert('Compra efetuada com sucesso!!')" class="btn btn-lg" href="/home" role="button" id="botao-comprar">Finalizar</a>
				    </div>
                </div>
            

            </div>
	</div>
	   
	@stop
</body>