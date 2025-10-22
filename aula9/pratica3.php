<?php
function calcularValorFinal($valor, $desconto) {
    if (!is_numeric($valor) || !is_numeric($desconto)) {
        throw new Exception("Os parâmetros devem ser numéricos.");
    }

    if ($valor < 0 || $desconto < 0) {
        throw new Exception("Os valores não podem ser negativos.");
    }

    if ($desconto > $valor) {
        throw new Exception("O desconto não pode ser maior que o valor.");
    }

    return $valor - $desconto;
}

try {
    $valor = isset($_REQUEST["valor"]) ? $_REQUEST["valor"] : null;
    $desconto = isset($_REQUEST["desconto"]) ? $_REQUEST["desconto"] : null;

    if ($valor === null || $desconto === null) {
        throw new Exception("Parâmetros 'valor' e 'desconto' são obrigatórios.");
    }

    $resultado = calcularValorFinal($valor, $desconto);

    echo "<h3>Valor final: R$ " . number_format($resultado, 2, ',', '.') . "</h3>";
} catch (Exception $e) {
    echo "<strong>Erro:</strong> " . $e->getMessage();
}
?>
