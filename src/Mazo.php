<?php

namespace TDD;

class Mazo {
  protected $cantcartas=0;

  public function mezclar() {
    return TRUE;
  }

  public function vacio() {
    if($this->cantcartas == 0)
        return TRUE;
     return FALSE;
  }
}
