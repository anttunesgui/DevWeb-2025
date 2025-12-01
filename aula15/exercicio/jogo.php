<?php

require_once "Time.php";
require_once "Gol.php";

class Jogo {
    public Time $timeA;
    public Time $timeB;
    private array $gols = [];

    public function __construct(Time $timeA, Time $timeB) {
        $this->timeA = $timeA;
        $this->timeB = $timeB;
    }

    public function addGol(Time $time, Jogador $jogador, int $tempo) {
        $this->gols[] = new Gol($tempo, $jogador, $time);
    }

    public function getNomeTimeVencedor(): string {
        $golsA = 0;
        $golsB = 0;

        foreach ($this->gols as $gol) {
            if ($gol->time === $this->timeA) {
                $golsA++;
            } else if ($gol->time === $this->timeB) {
                $golsB++;
            }
        }

        if ($golsA > $golsB) {
            return $this->timeA->nome;
        } else if ($golsB > $golsA) {
            return $this->timeB->nome;
        } else {
            return "Empate";
        }
    }
}
