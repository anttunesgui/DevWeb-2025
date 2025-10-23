<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Compra de Joãozinho</title>
</head>
<body>

<form method="post">
    <label>Preço da maçã (R$/kg):</label><br>
    <input type="number" name="preco_maca" required><br>
    <label>Quantidade de maçã (kg):</label><br>
    <input type="number" name="qtd_maca" required><br><br>

    <label>Preço da melancia (R$/kg):</label><br>
    <input type="number" name="preco_melancia" required><br>
    <label>Quantidade de melancia (kg):</label><br>
    <input type="number" name="qtd_melancia" required><br><br>

    <label>Preço da laranja (R$/kg):</label><br>
    <input type="number" name="preco_laranja" required><br>
    <label>Quantidade de laranja (kg):</label><br>
    <input type="number" name="qtd_laranja" required><br><br>

    <label>Preço do repolho (R$/kg):</label><br>
    <input type="number" name="preco_repolho" required><br>
    <label>Quantidade de repolho (kg):</label><br>
    <input type="number" name="qtd_repolho" required><br><br>

    <label>Preço da cenoura (R$/kg):</label><br>
    <input type="number" name="preco_cenoura" required><br>
    <label>Quantidade de cenoura (kg):</label><br>
    <input type="number" name="qtd_cenoura" required><br><br>

    <label>Preço da batatinha (R$/kg):</label><br>
    <input type="number" name="preco_batatinha" required><br>
    <label>Quantidade de batatinha (kg):</label><br>
    <input type="number" name="qtd_batatinha" required><br><br>

    <button type="submit">Calcular Compra</button>
</form>

<?php
if (
    isset($_POST['preco_maca'], $_POST['qtd_maca'],
    $_POST['preco_melancia'], $_POST['qtd_melancia'],
    $_POST['preco_laranja'], $_POST['qtd_laranja'],
    $_POST['preco_repolho'], $_POST['qtd_repolho'],
    $_POST['preco_cenoura'], $_POST['qtd_cenoura'],
    $_POST['preco_batatinha'], $_POST['qtd_batatinha'])
) {

    $saldo = 50.0;

    $total_maca = $_POST['preco_maca'] * $_POST['qtd_maca'];
    $total_melancia = $_POST['preco_melancia'] * $_POST['qtd_melancia'];
    $total_laranja = $_POST['preco_laranja'] * $_POST['qtd_laranja'];
    $total_repolho = $_POST['preco_repolho'] * $_POST['qtd_repolho'];
    $total_cenoura = $_POST['preco_cenoura'] * $_POST['qtd_cenoura'];
    $total_batatinha = $_POST['preco_batatinha'] * $_POST['qtd_batatinha'];

    $total_compra = $total_maca + $total_melancia + $total_laranja + $total_repolho + $total_cenoura + $total_batatinha;

    echo "<p>Total da compra: R$ ". $total_compra ." </p>";

    if ($total_compra < $saldo) {
        $restante = $saldo - $total_compra;
        echo "<p style='color:blue;'>O valor da compra ficou dentro do orçamento. Joãozinho ainda pode gastar R$ ".$restante."</p>";
    } elseif ($total_compra > $saldo) {
        $faltando = $total_compra - $saldo;
        echo "<p style='color:red;'>Dinheiro insuficiente! Faltam R$ ".$faltando."</p>";
    } else {
        echo "<p style='color:green;'>O saldo foi totalmente esgotado! Compra exatamente R$ 50,00</p>";
    }
}
?>

</body>
</html>