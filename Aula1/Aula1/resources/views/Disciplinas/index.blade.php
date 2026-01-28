<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
</head>
<body>
    <h1>Lista de Disciplinas</h1>
    <ul>
        @foreach($disciplinas as $disciplina)
            <li>
                <a href="/disciplinas/{{ $disciplina['id'] }}">{{ $disciplina['id'] }}

                 {{ $disciplina['nome'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="/disciplinas/create">Cadastrar nova disciplina</a>
        
</body>
</html>