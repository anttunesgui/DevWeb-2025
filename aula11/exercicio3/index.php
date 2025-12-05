<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro JSON</title>
</head>
<body>

<h2>Cadastro de Pessoas (JSON)</h2>

<form action="json.php" method="POST">

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Sobrenome:</label><br>
    <input type="text" name="sobrenome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <label>Cidade:</label><br>
    <input type="text" name="cidade" required><br><br>

    <label>Estado:</label><br>
    <input type="text" name="estado" required><br><br>

    <button type="submit">Salvar</button>

</form>

</body>
</html>
