<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body id="corpologin">
    <div id="voltar1">
        <a href="/" ><img src="../img/seta.png"  width="80px" href="/"></a>
        <h1 ></h1>
    </div>
    <div id="imglogo">
        <img src="../img/logo.png"  >
    </div>
    <div id="login">
        <form  action="/home" method="GET">
        <input class="entrada" name="login" required="required" type="email" placeholder=" E-mail ou Telefone"/><br>
        <input class="entrada" name="senha" required="required" type="password" placeholder=" Senha"/><br>
        <a href="/recuperarsenha"id="esqueceu">Esqueceu sua senha?</a><br>
	    <input id="botaoacessar" name="acessar" type="submit" value="Acessar">

        </form>
    </div>
</body>
</html>