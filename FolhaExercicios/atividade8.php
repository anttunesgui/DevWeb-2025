<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Parcelas do Financiamento</title>
</head>
<body>

<form method="post">
    <label>Valor do financiamento:</label><br>
    <input type="text" name="valor" required><br><br>
    <button type="submit">Calcular Parcelas</button>
</form>

<?php
if (isset($_POST['valor'])) {
    $valor = $_POST['valor'];

    $parcelas = [24, 36, 48, 60];
    $taxaBase = 1.5;

    foreach ($parcelas as $i => $numParcelas) {
        $taxa = $taxaBase + ($i * 0.5);
        $valorParcela = ($valor * (1 + $taxa/100)) / $numParcelas;
        $valorParcelaFormatado = number_format($valorParcela, 2, ",", ".");
        echo "<p>$numParcelas vezes com taxa de $taxa%: R$ $valorParcelaFormatado por parcela</p>";
    }
}
?>

</body>
</html>