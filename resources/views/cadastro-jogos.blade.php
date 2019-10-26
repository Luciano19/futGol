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
        <h1 >Cadastro de jogos   </h1>
    </div>
    <div id="registro">
        <form  action="{{route(jogo.store)}}" method="GET">

            <label>Defina os times</label><br>

            <select name="time">
                <option value="#" selected>Time 1</option>
                <option value="AVA">AVA</option>
                <option value="BA">BA</option>
                <option value="BOT">BOT</option>
                <option value="CAM">CAM</option>
                <option value="CAP">CAP</option>
                <option value="CEA">CEA</option>
                <option value="CHA">CHA</option>
                <option value="COR">COR</option>
                <option value="CRU">CRU</option>
                <option value="CSA">CSA</option>
                <option value="FLA">FLA</option>
                <option value="FLU">FLU</option>
                <option value="FOR">FOR</option>
                <option value="GOI">GOI</option>
                <option value="GRE">GRE</option>
                <option value="INT">INT</option>
                <option value="PAL">PAL</option>
                <option value="SAN">SAN</option>
                <option value="SAO">SAO</option>
                <option value="VAS">VAS</option>
            </select><br><br>

            <select name="time">
                <option value="#" selected>Time 2</option>
                <option value="AVA">AVA</option>
                <option value="BA">BA</option>
                <option value="BOT">BOT</option>
                <option value="CAM">CAM</option>
                <option value="CAP">CAP</option>
                <option value="CEA">CEA</option>
                <option value="CHA">CHA</option>
                <option value="COR">COR</option>
                <option value="CRU">CRU</option>
                <option value="CSA">CSA</option>
                <option value="FLA">FLA</option>
                <option value="FLU">FLU</option>
                <option value="FOR">FOR</option>
                <option value="GOI">GOI</option>
                <option value="GRE">GRE</option>
                <option value="INT">INT</option>
                <option value="PAL">PAL</option>
                <option value="SAN">SAN</option>
                <option value="SAO">SAO</option>
                <option value="VAS">VAS</option>
            </select><br><br>

            <label>Defina o estádio</label><br>

            <select name="estadio">
                <option value="#" selected>Estádio</option>
                <option value="allianzparque">Allianz Parque</option>
                <option value="arenaconda">Arena Condá</option>
                <option value="arenagremio">Arena Grêmio</option>
                <option value="baixada">Baixada</option>
                <option value="beirario">Beira Rio</option>
                <option value="castelao">Castelão</option>
                <option value="engenhao">Engenhão</option>
                <option value="fontenova">Fonte Nova</option>
                <option value="independencia">Independência</option>
                <option value="itaquerao">Itaquerão</option>
                <option value="maracana">Maracanã</option>
                <option value="mineirao">Mineirão</option>
                <option value="morumbi">Morumbi</option>
                <option value="reipele">Rei Pelé</option>
                <option value="ressacada">Ressacada</option>
                <option value="saojanuario">São Januário</option>
                <option value="vilabelmiro">Vila Belmiro</option>
            </select><br><br>

            <label>Defina o estado</label><br>
           
            <select name="cidade">
                <option value="#" >Estado</option>
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
            <label>Data do jogo</label><br>
            <input class="entradaregistro" name="datajogo" required="required" type="date" /><br>
            <label>Horário do jogo</label><br>
            <input class="entradaregistro" name="horajogo" required="required" type="time" /><br>
            
           
            
            
            

            <input id="botaoregistrar" onclick="alert('Jogo cadastrado com sucesso!!')" name="acessar" type="submit" value="Сadastrar">

        </form>
    </div>
   
</body>
</html>























