<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
        Login: <input type="text" name="login" ><br>
        Senha: <input type="password" name="senha" ><br>
        <input type="submit" name="enviar" >
    </form>
</body>
</html>

   <?php

if(isset($_GET['login'])){

    $login=$_GET['login']; 
    $senha=$_GET['senha']; 

    $name = $email = $erro = "";

    

        if(empty($_GET["nome"])){
            $erro.="Digite o login diabo burro<br>";
        }else {
            $nome = ($_GET["login"]);
        }

        

        echo($erro);
    
    
}
if(empty($_GET["login"])){
    $erro.="Digite uma senha satanás<br>";
}else {
    $senha= ($_GET["senha"]);
}
    ?>