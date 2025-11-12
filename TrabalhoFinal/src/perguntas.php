<?php

    require_once 'db.php';
    $connection = conexaoBanco();


    function getPerguntas() {
        global $connection;
        $sSelect_perguntas = 'SELECT * FROM perguntas';
        $result = pg_query($connection, $sSelect_perguntas);
        $aPerguntas = array();

        while ($row = pg_fetch_assoc($result)){
            $aPerguntas[] = $row['texto_pergunta'];
        }

        return $aPerguntas;
    }


