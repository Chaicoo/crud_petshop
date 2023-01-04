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
    <link rel="stylesheet" href="{{url('/css/read.css')}}">
    <title>Veterinários</title>
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
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CRMV</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vets as $vet)
                <tr>
                    <td>{{$vet->Nome}}</td>
                    <td>{{$vet->CRMV}}</td>
                    <td>{{formatNumber($vet->Telefone)}}</td>
                    <td class="collumButton">
                        <a href="/editar-vet/{{ $vet -> idVeterinario }}" class="btnEdit">Editar</a>
                        <a href='/delete-vet/{{ $vet -> idVeterinario }}' class="btnDelete">Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">
            <a href="/adicionar-veterinario" class="btn">
                Cadastrar Veterinário
            </a>
        </div>
    </main>
</body>

</html>