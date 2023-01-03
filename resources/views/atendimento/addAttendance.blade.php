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
    <title>Cadastrar atendimento</title>
</head>

<body>
    <header>
        <div class="container limitWidth">
            <div class="logo">
                <img src="{{url('/assets/logo.png')}}" alt="Petshop" />
            </div>
            <nav class="menu">
                <ul>
                    <li><a href='../index.php'>Atendimentos</a></li>
                    <li><a href='readClients.php'>Clientes</a></li>
                    <li><a href='readPets.php'>Pets</a></li>
                    <li><a href='readVets.php'>Veterinarios</a></li>
                    <li><a href='readReport.php'>Relatorio</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <form action='/cadastrar-atendimento' method="POST">
            @csrf
            <input type="date" name="Data" placeholder="Data" required>
            <input type="text" name="Descricao" placeholder="Descrição" required>
            <select name="Pet_idPet" id="pet">
                <option value="">Selecione o pet</option>
                @foreach($pets as $pet)
                <option value="{{$pet->idPet}}">{{$pet->Nome}}</option>
                @endforeach
            </select>
            <select name="idVeterinario" id="veterinario">
                <option value="">Selecione o veterinario</option>
                @foreach($vets as $vet)
                <option value="{{$vet->idVeterinario}}">{{$vet->Nome}}</option>
                @endforeach
            </select>
            <input type="submit" value="Salvar" class="btn">
        </form>
    </main>

</body>

</html>