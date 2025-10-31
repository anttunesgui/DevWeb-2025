<?php

require_once 'model/Pessoa.php';

$pessoa = new Pessoa();
$pessoa->setNome("Guilherme");
$pessoa->setSobrenome("Antunes");
$pessoa->setDataNascimento("2006-02-20");
$pessoa->setCpfCnpj("123.456.789-00");
$pessoa->setTipo(1);
echo $pessoa->getNomeCompleto().'<br>';
echo "Data de Nascimento: " . $pessoa->getDataNascimento() . '<br>';
echo "CPF/CNPJ: " . $pessoa->getCpfCnpj() . '<br>';
if ($pessoa->getTipo() == 1) {
    echo "Tipo: Físico<br>";
} elseif ($pessoa->getTipo() == 2) {
    echo "Tipo: Jurídico<br>";
} else {
    echo "Tipo: Desconhecido<br>";
}

