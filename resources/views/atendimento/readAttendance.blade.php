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
    <link rel="stylesheet" href="./css/read.css">
    <title>Clientes</title>
</head>

<body>
    <header>
        <div class="container limitWidth">
            <div class="logo">
                <img src="assets/logo.png" alt="Petshop" />
            </div>
            <nav class="menu">
                <ul>
                    <li><a href='../index.php'>Atendimentos</a></li>
                    <li><a href='/clientes'>Clientes</a></li>
                    <li><a href='readPets.php'>Pets</a></li>
                    <li><a href='/veterinarios'>Veterinarios</a></li>
                    <li><a href='readReport.php'>Relatórios</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Data - Horario</th>
                    <th>Descricao</th>
                    <th>Veterinario</th>
                    <th>Pet</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                <tr>
                    <td>{{$attendance->Data}}</td>
                    <td>{{$attendance->Descricao}}</td>
                    <td>{{$attendance->NomeVeterinario}}</td>
                    <td>{{$attendance->NomePet}}</td>
                    <td class="collumButton">
                        <a href="/editar-atendimento/{{ $attendance -> idAtendimento }}" class="btnEdit">Editar</a>
                        <a href='/delete-atendimento/{{ $attendance -> idAtendimento }}' class="btnDelete">Apagar</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        <div class="container">
            <a href="/adicionar-atendimento" class="btn">Cadastrar</a>
        </div>


    </main>
</body>

</html>