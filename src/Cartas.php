<?php

namespace TDD;

class Cartas {

    protected $palo;
    protected $numero;

    public function __construct($palo, $numero){
        
        $this->numero= $numero;
        if($palo%4 ==0)
            $this->palo= "Oro";
        elseif($palo%4 ==1)
            $this->palo= "Basto";
        elseif($palo%4 ==2)
            $this->palo= "Copa";
        elseif($palo%4 ==3)
            $this->palo= "Espada";
    }

    public function obtenerPalo(){
        return $this->palo;
    }

    public function obtenerNumero(){
        return $this->numero;
    }
}

