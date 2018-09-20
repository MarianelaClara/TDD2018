<?php

namespace TDD;

class Mazo {
  protected $cantcartas=0;
  protected $cajita=[];
  public function mezclar() {
    return TRUE;
  }

  public function vacio() {
    if($this->cantcartas == 0)
        return TRUE;
     return FALSE;
  }

  public function agregarCarta($carta) {
    $this->cajita[$this->cantcartas]= $carta;
    $this->cantcartas ++;
    return TRUE;
  }

}
