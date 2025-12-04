<?php
require_once 'db.php';
$conn = conexaoBanco();

$result = pg_query($conn);

if (!$result) {
    echo json_encode(["erro" => "Erro ao buscar perguntas"]);
    exit;
}

$perguntas = pg_fetch_all($result);
if (!$perguntas) {
    $perguntas = []; 
}

echo json_encode($perguntas);
 