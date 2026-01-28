<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Cursos</title>
</head>
<body>
    <h1>Listagem de Cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso }}</li>
        @endforeach
    </ul>
</body>
</html>