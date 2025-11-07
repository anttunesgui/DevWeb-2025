<?php

class Computador{

    private $estado;

    public function ligar(){
        if ($this->status() == 'Ligado'){
            return false;
        } else {
            $this->estado = "Ligado";
            return true;        
        }
    }

    public function desligar(){
        if ($this->status() == 'Desligado'){
            return false;
        } else {
            $this->estado = "Desligado";
            return true;        
        }
    }
    public function status(){
        return $this->estado;
    }
       
    

}