<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nova disciplina</title>
</head>
<body>
    <h1>Cadastro de Disciplinas</h1>
    <form action="/disciplinas" method="POST">
        @csrf
        <label for="nome">Nome da Disciplina:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <button type="submit">Cadastrar Disciplina</button>
    </form>
</body>
</html>