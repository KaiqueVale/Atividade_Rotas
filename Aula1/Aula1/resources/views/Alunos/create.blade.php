<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="/alunos" method="POST">
        @csrf
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <button type="submit">Cadastrar Aluno</button>
    </form>
</body>
</html>