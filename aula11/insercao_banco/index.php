<?php

require_once "../conexao.php";

$nome = $_POST['nome'];
$sbrnome = $_POST['sbrnome'];
$email = $_POST['email'];
$senha = $_POST['pass'];
$cidade = $_POST['city'];
$estado = $_POST['estado'];


$connection = conexaoBanco();


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