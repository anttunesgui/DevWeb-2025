<?php
$nome = $_POST['nome'];
$sbrnome = $_POST['sbrnome'];
$email = $_POST['email'];
$senha = $_POST['pass'];
$cidade = $_POST['city'];
$estado = $_POST['estado'];


$connectionString = "host=localhost 
                    port=5432
                    dbname=local 
                    user=postgres
                    password=antunes";

$connection = pg_connect($connectionString);


 $oDadosPessoa = array($nome,
                          $sbrnome,
                          $email,
                          $senha,
                          $cidade,
                          $estado);
                          
    $resultInsert = pg_query_params($connection,
                                    'INSERT INTO TBPESSOA(pesnome,
                                                          pessobrenome,
                                                          pesemail,
                                                          pespassword,
                                                          pescidade,
                                                          pesestado)
                                    VALUES ($1, $2, $3, $4, $5, $6)',
                                    $oDadosPessoa);


    if ($resultInsert){
        echo '<br> Dados inseridos com sucesso';
    }