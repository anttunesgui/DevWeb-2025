<?php

require_once "Jogador.php";
require_once "Time.php";

class Gol {
    public int $tempo;
    public Jogador $jogador;
    public Time $time;

    public function __construct($tempo, Jogador $jogador, Time $time) {
        $this->tempo = $tempo;
        $this->jogador = $jogador;
        $this->time = $time;
    }
}
