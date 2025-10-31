<?php

require_once '01_pessoa.php';

$pessoa = new Pessoa();
$pessoa->setNome("Guilherme");
$pessoa->setSobrenome("Antunes");

echo $pessoa->getNomeCompleto();
