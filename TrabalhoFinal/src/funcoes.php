<?php

require_once 'db.php';
require_once 'perguntas.php';

class Funcoes {
    
    public function exibirPerguntas() {
        $aPerguntas = getPerguntas();
        return $aPerguntas;
    }

}
