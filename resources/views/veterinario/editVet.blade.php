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
        <form action="/save-edit-vet" method="POST">
            @csrf
            <input type="hidden" name="idVeterinario" value="{{$veterinario[0]->idVeterinario}}">
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" value="{{$veterinario[0]->Nome}}">
            <label for="CRMV">CRMV</label>
            <input type="text" name="CRMV" value="{{$veterinario[0]->CRMV}}">
            <label for="Telefone">Telefone</label>
            <input type="text" name="Telefone" value="{{$veterinario[0]->Telefone}}">
            <button type="submit" class="btn">Salvar</button>
        </form>
    </main>

</body>

</html>