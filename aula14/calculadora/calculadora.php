<?php

class Calculadora {

    private $iNumero1;

    private $iNumero2;

    public function getNumero1() {
        return $this->iNumero1;
    }

    public function setNumero1($numero1) {
        $this->iNumero1 = $numero1;
    }

    public function getNumero2() {
        return $this->iNumero2;
    }

    public function setNumero2($numero2) {
        $this->iNumero2 = $numero2;
    }

    public function somar() {
        return $this->iNumero1 + $this->iNumero2;
    }

    public function subtrair() {
        return $this->iNumero1 - $this->iNumero2;
    }

    public function multiplicar() {
        return $this->iNumero1 * $this->iNumero2;
    }

    public function dividir() {
        if ($this->iNumero2 != 0) {
            return $this->iNumero1 / $this->iNumero2;
        } else {
            return "Erro: Divisão por zero.";
        }
    }
    

}