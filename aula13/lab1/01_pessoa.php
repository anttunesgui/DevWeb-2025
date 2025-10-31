<?php

class Pessoa {
    private $nome;
    private $sobrenome;
    
    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getNomeCompleto() {
        return $this->getNome() . ' ' . $this->getSobrenome();
    }
}
    