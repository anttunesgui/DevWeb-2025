<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  border="1px">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <form method="GET">
            <label for="">Filtrar nome: </label>
            <input type="text" id="nome" name="nome">
            <input type="submit" id="botao" name="botao" onclick="exibefiltros.php" value="Filtrar">
            <br>
        </form>
        <br>
        <tbody>
            <?php include 'exibe.php'; ?>
        </tbody>
    </table>
</body>
</html>