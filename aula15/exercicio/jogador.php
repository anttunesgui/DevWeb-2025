<?php

class Jogador {
    public string $nome;
    public string $posicao;
    public string $dataNascimento;

    public function __construct($nome, $posicao, $dataNascimento) {
        $this->nome = $nome;
        $this->posicao = $posicao;
        $this->dataNascimento = $dataNascimento;
    }
}
