<?php
    
    require_once "endereco.php";
    require_once "contato.php";

class Pessoa {
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $cpfCnpj;
    private $tipo;
    private $telefone;
    private $Endereco;
    private $Contato;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpfCnpj() {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj($cpfCnpj) {
        $this->cpfCnpj = $cpfCnpj;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getNomeCompleto() {
        return $this->nome . ' ' . $this->sobrenome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEndereco($rua, $bairro, $cidade, $estado, $cep) {
        $oEndereco = new Endereco();
        $oEndereco->setRua($rua);
        $oEndereco->setBairro($bairro);
        $oEndereco->setCidade($cidade);
        $oEndereco->setEstado($estado);
        $oEndereco->setCep($cep);
        $this->Endereco = $oEndereco;
    }

    public function getEndereco() {
        return $this->Endereco;
    }

     public function getContato() {
        return $this->Contato;
    }

    public function setContato($tipo, $valor, $nome) {
        $oContato = new Contato();
        $oContato->setTipo($tipo);
        $oContato->setValor($valor);
        $oContato->setNome($nome);
        $this->Contato = $oContato;
    }

    public function getIdade() {
        $dataNascimento = new DateTime($this->dataNascimento);
        $dataAtual = new DateTime();
        $idade = $dataAtual->diff($dataNascimento);
        return $idade->y;
    }

    public function toJson() {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}