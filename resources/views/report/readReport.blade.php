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
    <title>Pets</title>
</head>

<body>
    <header>
        <div class="container limitWidth">
            <div class="logo">
                <img src="assets/logo.png" alt="Petshop" />
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
                    <th>Indice</th>
                    <th>Dados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Clientes cadastrados</td>
                    <td>{{$clients}} Clientes</td>
                </tr>
                <tr>
                    <td>Pets cadastrados</td>
                    <td>{{$pets}} Pets</td>
                </tr>
                <tr>
                    <td>Veterinarios cadastrados</td>
                    <td>{{$vets}} Veterinarios</td>
                </tr>
                <tr>
                    <td>Atendimentos abertos</td>
                    <td>{{$attendancesActive}} Atendimentos</td>
                </tr>
                <tr>
                    <td>Atendimentos concluidos</td>
                    <td>{{$attendancesConcluded}} Atendimentos</td>
                </tr>
    </main>
</body>

</html>