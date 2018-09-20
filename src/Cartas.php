<?php

namespace TDD;

class Cartas {

    protected $palo;

    public function __construct($palon, $numero){
    
        $this->palo= $palon;

    }

    public function obtenerPalo(){
        return $this->palo;
    }
}

