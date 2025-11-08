<?php

    $pastas = array("bsn" =>
                    array("3a Fase" =>
                    array("desenvWeb", "bancoDados 1", "engSoft 1"),
                          "4a Fase" => 
                    array("Intro Web", "bancoDados 2", "enfSoft 2")));


function listarPastas($pastas, $nivel = 1) {
    foreach ($pastas as $chave => $valor) {
        if (is_numeric($chave)) {
            echo str_repeat("-", $nivel) . " " . $valor . "<br>";
        } else {
            echo str_repeat("-", $nivel) . " " . $chave . "<br>";
        }
        if (is_array($valor)) {
            listarPastas($valor, $nivel + 1);
        }
    }
}

listarPastas($pastas);