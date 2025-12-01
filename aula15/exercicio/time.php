<?php

require_once "Jogador.php";

class Time {
    public string $nome;
    public int $anoFundacao;
    private array $jogadores = [];

    public function __construct($nome, $anoFundacao) {
        $this->nome = $nome;
        $this->anoFundacao = $anoFundacao;
    }

    public function addJogador(Jogador $j) {
        $this->jogadores[] = $j;
    }

    public function getJogadores(): array {
        return $this->jogadores;
    }
}
