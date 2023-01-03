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
                    <li><a href='../index.php'>Atendimentos</a></li>
                    <li><a href='readClients.php'>Clientes</a></li>
                    <li><a href='readPets.php'>Pets</a></li>
                    <li><a href='/veterinarios/'>Veterinarios</a></li>
                    <li><a href='readReport.php'>Relatórios</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <form action="/save-edit-atendimento" method="POST">
            @csrf
            <input type="hidden" name="idAtendimento" value="{{$attendance[0]->idAtendimento}}">
            <label for="Descricao">Descrição</label>
            <input type="text" name="Descricao" value="{{$attendance[0]->Descricao}}">
            <label for="Data">Data</label>
            <input type="text" name="Data" value="{{$attendance[0]->Data}}">
            <label for="Pet">Pet</label>
            <select name="Pet_idPet" id="Pet">
                @foreach($pets as $pet)
                <option value="{{$pet->Pet_idPet}}">{{$pet->Nome}}</option>
                @endforeach
            </select>
            <label for="Veterinario">Veterinário</label>
            <select name="idVeterinario" id="Veterinario">
                @foreach($vets as $vet)
                <option value="{{$vet->idVeterinario}}">{{$vet->Nome}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn">Salvar</button>
        </form>
    </main>

</body>

</html>