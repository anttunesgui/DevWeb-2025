<?php
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'db.php';

$input = json_decode(file_get_contents("php://input"), true);

if (!$input) {
    echo json_encode(["erro" => "Nenhum dado recebido"]);
    exit;
}

$connection = conexaoBanco();
$id_setor = 1;
$id_dispositivo = 1;

if (isset($input["id_pergunta"]) && isset($input["nota"])) {
    $id_pergunta = (int)$input["id_pergunta"];
    $nota = (int)$input["nota"];

    $query = "INSERT INTO avaliacoes (id_setor, id_pergunta, id_dispositivo, resposta)
              VALUES ($1, $2, $3, $4)";
    
    $result = pg_query_params($connection, $query, [
        $id_setor, $id_pergunta, $id_dispositivo, $nota
    ]);

    if (!$result) {
        echo json_encode(["erro" => pg_last_error($connection)]);
    } else {
        echo json_encode(["status" => "ok", "id_pergunta" => $id_pergunta, "nota" => $nota]);
    }
    exit;
}

if (isset($input["feedback"])) {
    $feedback = trim($input["feedback"]);

    $query = "UPDATE avaliacoes
              SET feedback_textual = $1
              WHERE id_avaliacao IN (SELECT id_avaliacao
                                      FROM avaliacoes
                                     WHERE id_avaliacao BETWEEN 
                                                        (SELECT MAX(id_avaliacao) 
                                                           FROM avaliacoes) - 9
                                                            AND (SELECT MAX(id_avaliacao) 
                                                                   FROM avaliacoes))";

    $result = pg_query_params($connection, $query, [$feedback]);

    if (!$result) {
        echo json_encode(["erro" => pg_last_error($connection)]);
    } else {
        echo json_encode(["status" => "ok", "mensagem" => "Feedback salvo"]);
    }
    exit;
}

echo json_encode(["erro" => "Dados inválidos"]);
?>