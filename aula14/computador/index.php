<?php

require_once 'computador.php';

$pc = new Computador();

if ($pc->ligar()){
    echo "Ligado com sucesso!<br>";
}else{
    echo "O computador já está ligado!<br>";
}

if ($pc->desligar()){
    echo "Desligado com sucesso!<br>";
}else{
    echo "O computador já está desligado!<br>";
}


