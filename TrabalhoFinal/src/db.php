<?php
function conexaoBanco(){
    $connectionString = "host=localhost 
                        port=5432
                        dbname=avaliacoes 
                        user=postgres
                        password=antunes";

    $connection = pg_connect($connectionString);

    return $connection;
}
?>
