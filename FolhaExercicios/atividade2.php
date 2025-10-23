<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Divisível por 2</title>
</head>
<body>

<form method="post">
    <label>Digite um número:</label><br>
    <input type="number" name="numero" required><br><br>
    <button type="submit">Verificar</button>
</form>

<?php
if (isset($_POST['numero'])) {
    $num = $_POST['numero'];

    if ($num % 2 == 0) {
        echo "<p>Valor divisível por 2</p>";
    } else {
        echo "<p>O valor não é divisível por 2</p>";
    }
}
?>

</body>
</html>