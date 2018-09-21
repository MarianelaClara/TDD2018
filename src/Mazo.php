<?php

namespace TDD;

class Mazo {
  protected $cantcartas=-1;
  protected $cajita=[];
  public function mezclar() {
    return TRUE;
  }

  public function vacio() {
    if($this->cantcartas == -1)
      return TRUE;
    return FALSE;
  }

  public function agregarCarta($carta) {
    $this->cantcartas ++;
    $this->cajita[$this->cantcartas]= $carta;
    return TRUE;
  }

  public function obtenerCant() {
    return ($this->cantcartas +1);
  }

  public function sacar(){
    if($this->cantcartas== -1)
      return FALSE;
    $this->cantcartas --;
    return $this->cajita[($this->cantcartas +1)];
  }

}
