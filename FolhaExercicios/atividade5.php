<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Triângulo Retângulo</title>
</head>
<body>



<form method="post">
    <label>Base (em metros):</label><br>
    <input type="number" name="base" step="0.01" required><br><br>

    <label>Altura (em metros):</label><br>
    <input type="number" name="altura" step="0.01" required><br><br>

    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_POST['base']) && isset($_POST['altura'])) {

    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $area = ($base * $altura) / 2;


    echo "<p>A área do triângulo retângulo de base $base metros e altura $altura metros é $area metros quadrados.</p>";
}
?>

</body>
</html>