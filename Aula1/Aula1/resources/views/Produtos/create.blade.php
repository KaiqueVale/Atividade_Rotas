<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>

<h1>Cadastro de Produto</h1>

<form action="/produtos" method="POST">
    @csrf

    <label>Nome do produto:</label><br>
    <input type="text" name="nome"><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>
