<?php
function conexaoBanco(){
    $connectionString = "host=localhost 
                        port=5432
                        dbname=avaliacoes 
                        user=postgres
                        password=antunes";

    $connection = pg_connect($connectionString);

    if(!$connection){
        header('Content-Type: application/json');
        echo json_encode(["erro" => "Erro ao conectar ao banco de dados"]);
        exit;
    }

    return $connection;
}
?>
