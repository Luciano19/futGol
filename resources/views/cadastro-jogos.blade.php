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
        <a href="/"><img src="../img/seta.png" width="80px" href="/"></a>
        <h1>Cadastro de jogos </h1>
    </div>
    <div id="registro">
        <form action="/jogos" method="GET" enctype="multipart/form-data">
            @csrf
            <label>Defina os times</label><br>

            <select id="time1" class="form-control" name="time1">
                @foreach($equipes as $tim)
                <option value={{$tim->id}}>{{$tim->nome}}</option>
                @endforeach
            </select><br><br>

            <select id="foto1" class="form-control" name="foto1">
                @foreach($equipes as $tim)
                <option value={{$tim->foto}}>{{$tim->foto}}</option>
                @endforeach
            </select><br><br>

            <select id="time2" class="form-control" name="time2">
                @foreach($equipes as $tim)
                <option value={{$tim->id}}>{{$tim->nome}}</option>
                @endforeach
            </select><br><br>

            <select id="foto2" class="form-control" name="foto2">
                @foreach($equipes as $tim)
                <option value={{$tim->foto}}>{{$tim->foto}}</option>
                @endforeach
            </select><br><br>

            <label>Defina o estádio</label><br>

            <select class="form-control" name="estadio_id" id="estadio_id">
                @foreach($estadio as $estad)
                <option value={{$estad->id}}>{{$estad->nome}}</option>
                @endforeach
            </select>

            <label>Defina o estado</label><br>

            <select id="localizacao" class="form-control" name="localizacao">
                <option value="#">Estado</option>
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
            <input class="entradaregistro" name="data" required="required" type="date" /><br>

            <label>Horário do jogo</label><br>
            <input class="entradaregistro" name="horario" required="required" type="time" /><br>






            <button class="btn btn-primary" type="submit">Cadastrar!</button>
        </form>
    </div>

</body>

</html>