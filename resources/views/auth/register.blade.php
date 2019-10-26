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
<body id="corporegistro">
    <div id="voltar">
        <a href="/" ><img src="../img/seta.png"  width="80px" href="/"></a>
        <h1 >Cadastro   </h1>
    </div>
    <div id="registro">
        <div id="imglogo1">
            <img src="../img/logo.png"  >
        </div>
        <form  action="/home" method="GET">

            <label>Dados Pessoais</label><br>

            <input class="entradaregistro" name="nomecompleto" required="required" type="text" placeholder=" Nome completo" /><br>
            <input class="entradaregistro" name="cpf" required="required" type="text" placeholder=" CPF"/><br>
            <input class="entradaregistro" name="data" required="required" type="date" placeholder=" Data de Nascimento"/><br>
            <input class="entradaregistro" name="telefone" required="required" type="text" placeholder=" Telefone"/><br>
           
            <label>Dados Residencais</label><br>
           
            <input class="entradaregistro" name="endereço" required="required" type="text" placeholder=" Endereço"/><br>
            <input class="entradaregistro" name="numero" required="required" type="text" placeholder=" Número"/>
            <input class="entradaregistro" name="complemento" type="text" placeholder=" Complemento"/><br>
            <input class="entradaregistro" name="bairro" required="required" type="text" placeholder=" Bairro"/><br>
            <input class="entradaregistro" name="cep" required="required" type="text" placeholder=" CEP"/><br>
           
            <select name="estado">
                <option value="#" selected>Estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select><br><br>
            <label>Dados de Acesso</label><br>
            <input class="entradaregistro" name="email" required="required" type="email" placeholder=" E-mail"/><br>
            <input class="entradaregistro" name="cpf" required="required" type="password" placeholder=" Senha"/><br>
            <input class="entradaregistro" name="data" required="required" type="password" placeholder=" Confirmar senha"/><br>
            <label>Foto</label>
            <input id="imgupload" name="img" type="file" placeholder="sss">
            
            <div class="check">
                <input class="msg1" type="checkbox" name="msg1" value="#"> <label>Concordo com os <a href="#">Termos e Política</a> do futGol</label>
                
            </div>
            
            
            
            

            <input id="botaoregistrar" onclick="alert('Conta cadastrada com sucesso!!')" name="acessar" type="submit" value="Сadastrar">

        </form>
    </div>
   
</body>
</html>























