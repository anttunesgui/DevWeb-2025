<?php
    require_once "time.php";
    require_once "jogador.php";

    $jogador1 = new Jogador();
    $jogador1->setNome("Carlos");
    $jogador1->setPosicao("Atacante");
    $jogador1->setDataNascimento("15/03/1995");

    $jogador2 = new Jogador();
    $jogador2->setNome("Marcos");
    $jogador2->setPosicao("Goleiro");
    $jogador2->setDataNascimento("22/07/1993");

    $jogador3 = new Jogador();
    $jogador3->setNome("Felipe");
    $jogador3->setPosicao("Meio-campo");
    $jogador3->setDataNascimento("10/11/1994");

    $jogador4 = new Jogador();
    $jogador4->setNome("Rafael");
    $jogador4->setPosicao("Zagueiro");
    $jogador4->setDataNascimento("05/05/1992");
    

    $time = new Time();
    $time->setNome("Real Madrid");
    $time->setAnoFundacao(1902);
    $time->addJogador($jogador1);
    $time->addJogador($jogador2);
    $time->addJogador($jogador3);
    $time->addJogador($jogador4);

    echo "Time: " . $time->getNome() . "<br>";
    echo "Ano de Fundação: " . $time->getAnoFundacao() . "<br>";
    echo "Jogadores:<br>";
    $aux = 0;
    foreach($time->mostraJogadores() as $jogador){
        $aux++;
        echo "Jogador $aux: " . $jogador->getNome() . ", Posição: " . $jogador->getPosicao() . ", Data de Nascimento: " . $jogador->getDataNascimento() . "<br>";
    }