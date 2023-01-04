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
    <link rel="stylesheet" href="{{url('/css/edit.css')}}">
    <title>Editar veterinário</title>
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
        <form action="/save-edit-pet" method="POST">
            @csrf
            <input type="hidden" name="idPet" value="{{$pets[0]->idPet}}">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$pets[0]->Nome}}">
            <label for="idade">Idade</label>
            <input type="text" name="idade" id="idade" value="{{$pets[0]->Idade}}">
            <label for="raca">Raça</label>
            <input type="text" name="raca" id="raca" value="{{$pets[0]->Raca}}">
            <label for="especie">Espécie</label>
            <input type="text" name="especie" id="especie" value="{{$pets[0]->Especie}}">
            <label for="dono">Dono</label>
            <select name="dono" id="dono">
                @foreach($clients as $client)
                <option value="{{$client->Id}}">{{$client->Nome}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn">Salvar</button>
            </div>
            </div>
    </main>

</body>

</html>