
<?php

$connectionString = "host=localhost 
                    port=5432
                    dbname=local 
                    user=postgres
                    password=antunes";

$connection = pg_connect($connectionString);

if($connection){
    echo "Database conectado com sucesso <br>";

    $result = pg_query($connection, "SELECT COUNT(*) AS QTDTABS FROM PG_TABLES");

    if ($result){
        $row = pg_fetch_assoc($result);
        echo "Quantidade de tabelas no database: ".$row['qtdtabs'];
    }else{
        echo "Erro ao execultar a consulta";
    }

    $oDadosPessoa = array('Joao',
                          'Silva',
                          'joao.silva@gmail.com',
                          '123456',
                          'Sao Paulo',
                          'SP');
                          
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

}else{

    echo "Database conectado com sucesso";
}
