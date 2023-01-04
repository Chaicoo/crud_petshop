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
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" id="Nome" value="{{$pets[0]->Nome}}">
            <label for="Idade">Idade</label>
            <input type="text" name="Idade" id="Idade" value="{{$pets[0]->Idade}}">
            <label for="Raca">Raça</label>
            <input type="text" name="Raca" id="Raca" value="{{$pets[0]->Raca}}">
            <label for="Especie">Espécie</label>
            <input type="text" name="Especie" id="Especie" value="{{$pets[0]->Especie}}">
            <label for="Dono">Dono</label>
            <select name="Dono" id="Dono">
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