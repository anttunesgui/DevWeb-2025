<?php
require_once 'db.php';
$conn = conexaoBanco();

$query = "SELECT id_pergunta, texto_pergunta 
          FROM perguntas 
          WHERE status = 'ativa'
          ORDER BY id_pergunta ASC";

$result = pg_query($conn, $query);

if (!$result) {
    echo json_encode(["erro" => "Erro ao buscar perguntas"]);
    exit;
}

$perguntas = pg_fetch_all($result);
if (!$perguntas) {
    $perguntas = []; 
}

echo json_encode($perguntas);
 