<?php

namespace TDD;

class CartasPoker extends Cartas {

    public function __construct($palo = 1, $numero = 1){
        if($numero <=0 || $numero >12 )
            $this->numero= 1;
        elseif($numero >=1 && $numero <= 9)
            $this->numero= $numero;
        elseif ($numero ==10)
            $this->numero= "J";
        elseif ($numero==11)
            $this->numero= "Q";
        elseif ($numero==12)
            $this->numero= "K";
        
        if($palo%4 ==0)
            $this->palo= "Corazon";
        elseif($palo%4 ==1)
            $this->palo= "Pika";
        elseif($palo%4 ==2)
            $this->palo= "Diamante";
        elseif($palo%4 ==3)
            $this->palo= "Trebol";
    }
}