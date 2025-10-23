<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Quadrado</title>
</head>
<body>


<form method="post">
    <label>Lado do quadrado (em metros):</label><br>
    <input type="number" name="lado"  required><br><br>
    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_POST['lado'])) {

    $lado = (float)$_POST['lado'];

    $area = $lado * $lado;

    echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
}
?>

</body>
</html>