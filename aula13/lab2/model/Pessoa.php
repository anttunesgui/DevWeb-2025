<?php

class Pessoa{

    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $cpfCnpj;
    private $tipo;
    private $telefone;
    private $endereco;

    public function __construct(){
        $this->inicializaClasse();
    }
    public function inicializaClasse(){
        $this->nome = "";
        $this->sobrenome = "";
        $this->dataNascimento = "";
        $this->cpfCnpj = "";
        $this->tipo = 1;
        $this->telefone = "";
        $this->endereco = "";
    }
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
     
    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpfCnpj(){
        return $this->cpfCnpj;
    }

    public function setCpfCnpj($cpfCnpj){
        $this->cpfCnpj = $cpfCnpj;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getNomeCompleto(){
        return $this->getNome() . ' ' . $this->getSobrenome();
    }

}