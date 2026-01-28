<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>
</head>
<body>
    <h1>Cadastro de Cursos</h1>
    <form action="/cursos" method="POST">
        @csrf
        <label for="nome">Nome do Curso:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <button type="submit">Cadastrar Curso</button>
    </form>
</body>
</html>