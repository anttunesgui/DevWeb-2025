<?php

require_once "Jogador.php";
require_once "Time.php";
require_once "Gol.php";
require_once "Jogo.php";

$t1 = new Time("Barcelona", 1900);
$t2 = new Time("Real Madrid", 1910);

$j1 = new Jogador("Pedro", "Atacante", "1998-02-10");
$j2 = new Jogador("João", "Meia", "2000-05-21");
$j3 = new Jogador("Lucas", "Atacante", "1997-09-11");
$j4 = new Jogador("Marcos", "Zagueiro", "1995-01-05");

$t1->addJogador($j1);
$t1->addJogador($j2);

$t2->addJogador($j3);
$t2->addJogador($j4);

$jogo = new Jogo($t1, $t2);

// Registrar gols
$jogo->addGol($t1, $j1, 12); 
$jogo->addGol($t2, $j3, 45); 
$jogo->addGol($t2, $j3, 66);
$jogo->addGol($t2, $j3, 58);
$jogo->addGol($t1, $j2, 77);

echo "Time vencedor: " . $jogo->getNomeTimeVencedor();
