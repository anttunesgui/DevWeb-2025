<?php

    require_once "../pratica1/pessoa.php";

    $oPai = new Pessoa();
    $oPai->setNome("Leonardo");
    $oPai->setDataNascimento("1963-05-15");
    $oPai->setEndereco("Rua das Flores", "Jardim America", "Ituporanga", "Santa Catarina", "89120-000");
    $oPai->setTelefone("(11) 98765-4321");
    $oPai->setContato(1,"Amigo","Nabor");
    $oPai->setCpfCnpj('123.456.789-00');

    $oMae = new Pessoa();
    $oMae->setNome("Vilma");
    $oMae->setDataNascimento("1965-08-22");
    $oMae->setEndereco("Avenida Brasil", "Centro", "Ituporanga", "Santa Catarina", "89120-001");
    $oMae->setTelefone("(11) 91234-5678");
    $oMae->setContato(1,"Amiga","Claudia");
    $oMae->setCpfCnpj('987.654.321-00');

    $oIrma = new Pessoa();
    $oIrma->setNome("Yasmim");
    $oIrma->setDataNascimento("1990-11-30");
    $oIrma->setEndereco("Travessa das Acacias", "Vila Nova", "Ituporanga", "Santa Catarina", "89120-002");
    $oIrma->setTelefone("(11) 99876-5432");
    $oIrma->setContato(1,"Colega","Fernanda");
    $oIrma->setCpfCnpj('456.789.123-00');

    $oIrma->toJson();
    
    $aParentes = array($oPai, $oMae, $oIrma);


$caminhoArquivo = "familia.txt"; 

$conteudo = "";

foreach ($aParentes as $pessoa) {
    $conteudo .= "Nome: " . $pessoa->getNome() . PHP_EOL;
    $conteudo .= "Data de Nascimento: " . $pessoa->getDataNascimento() . PHP_EOL;
    foreach ($pessoa->getEndereco() as $endereco => $valor){
        $conteudo .="Rua : " . $endereco->getRua() . PHP_EOL;
        $conteudo .="Bairro : " . $endereco->getBairro() . PHP_EOL;
        $conteudo .="Cidade : " . $endereco->getCidade() . PHP_EOL;
        $conteudo .="Estado : " . $endereco->getEstado() . PHP_EOL;
        $conteudo .="CEP : " . $endereco->getCep() . PHP_EOL;
    }
    $conteudo .= "Telefone: " . $pessoa->getTelefone() . PHP_EOL;
    $conteudo .= "CPF/CNPJ: " . $pessoa->getCpfCnpj() . PHP_EOL;
    $conteudo .= str_repeat("-", 40) . PHP_EOL;
}

// Salva o texto no arquivo (sobrescreve se já existir)
file_put_contents($caminhoArquivo, $conteudo);


echo "Arquivo 'familia.txt' criado com sucesso!";
