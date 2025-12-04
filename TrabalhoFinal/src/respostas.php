<?php
require_once 'db.php';

$input = json_decode(file_get_contents("php://input"), true);

$connection = conexaoBanco();
$id_setor = $_GET['setor'] ?? 1;
$id_dispositivo = 1;

if (isset($input["id_pergunta"]) && isset($input["nota"])) {
    $id_pergunta = (int)$input["id_pergunta"];
    $nota = (int)$input["nota"];

    $query = "INSERT INTO avaliacoes (id_setor, id_pergunta, id_dispositivo, resposta)
              VALUES ($1, $2, $3, $4)";
    
    $result = pg_query_params($connection, $query, [
        $id_setor, $id_pergunta, $id_dispositivo, $nota
    ]);
    
}

if (isset($input["feedback"])) {
    $feedback = $input["feedback"];

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
}
echo json_encode(["erro" => "Dados inválidos"]);
?>