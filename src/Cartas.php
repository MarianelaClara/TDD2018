<?php

namespace TDD;

class Cartas {

    protected $palo;
    protected $numero;

    public function __construct($palon, $numero){
        
        $this->numero= $numero;
        $this->palo= $palon;

    }

    public function obtenerPalo(){
        return $this->palo;
    }

    public function obtenerNumero(){
        return $this->numero;
    }
}

