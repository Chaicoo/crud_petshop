<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/css/edit.css') }}">
    <title>Cadastrar pet</title>
</head>

<body>
    <header>
        <div class="container limitWidth">
            <div class="logo">
                <img src="{{url('/assets/logo.png')}}" alt="Petshop" />
            </div>
            <nav class="menu">
                <ul>
                    <li><a href='/atendimentos'>Atendimentos</a></li>
                    <li><a href='/clientes'>Clientes</a></li>
                    <li><a href='/pets'>Pets</a></li>
                    <li><a href='/veterinarios'>Veterinarios</a></li>
                    <li><a href='/report'>Relatórios</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <form action='/cadastrar-pet' method='POST'>
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="Nome" id="nome" placeholder="Nome do pet" required>
            <label for="idade">Idade</label>
            <input type="number" name="Idade" id="idade" placeholder="Idade do pet" required>
            <label for="especie">Especie</label>
            <input type="text" name="Especie" id="especie" placeholder="Especie do pet" required>
            <label for="raca">Raça</label>
            <input type="text" name="Raca" id="raca" placeholder="Raça do pet" required>
            <select name="Cliente_Id" id="dono" required>
                <option value="">Selecione o dono</option>
                @foreach($clients as $client)
                <option value="{{$client->Id}}">{{$client->Nome}}</option>
                @endforeach
            </select>
            <input type="submit" value="Salvar" class="btn">
        </form>
    </main>

</body>

</html>