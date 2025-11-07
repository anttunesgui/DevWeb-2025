<?php

    require_once "pessoa.php";

    $pessoa = new Pessoa();
    $pessoa->setNome("João");
    $pessoa->setSobrenome("Silva");
    $pessoa->setDataNascimento("1990-01-01");
    $pessoa->setCpfCnpj("123.456.789-00");
    $pessoa->setTipo("Física");
    $pessoa->setTelefone("(11) 98765-4321");
    $pessoa->setEndereco("Rua A", "Bairro B", "Cidade C", "Estado D", "12345-678");
    $pessoa->setContato(1, "Guilherme", "Amigo");

    echo "Nome Completo: " . $pessoa->getNomeCompleto() . "<br>";

    echo "Idade: " . $pessoa->getIdade() . " anos<br>";

    echo "CPF/CNPJ: " . $pessoa->getCpfCnpj() . "<br>";

    echo "Tipo: " . $pessoa->getTipo() . "<br>";

    echo "Telefone: " . $pessoa->getTelefone() . "<br>";

    echo "Endereço: " . $pessoa->getEndereco()->getRua() . ", " . $pessoa->getEndereco()->getBairro() . ", " . $pessoa->getEndereco()->getCidade() . ", " . $pessoa->getEndereco()->getEstado() . " - CEP: " . $pessoa->getEndereco()->getCep() . "<br>";
    
    echo "Contato: Tipo " . $pessoa->getContato()->getTipo() . ", Valor: " . $pessoa->getContato()->getValor() . ", Nome: " . $pessoa->getContato()->getNome() . "<br>";
    
    
