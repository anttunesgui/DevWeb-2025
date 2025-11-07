<?php
    require_once "jogador.php";

class Time{

    private $nome;
    private $anoFundacao;
    private $Jogadores = array();

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getAnoFundacao(){
        return $this->anoFundacao;
    }
    public function setAnoFundacao($anoFundacao){
        $this->anoFundacao = $anoFundacao;
    }

    public function addJogador($jogador){
        $this->Jogadores[] = $jogador;
    }
    
    public function mostraJogadores(){
        return $this->Jogadores;
    }
}