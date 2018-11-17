<?php

namespace TDD;

class Mazo {
  protected $cantcartas = -1;
  protected $cajita = [];

  public function mezclar() {
    if ($this->cantcartas == -1 || $this->cantcartas == 0)
      return TRUE;
    $inicio = 0;
    $final = $this->cantcartas;
    $mezcla = [];
    $punt = 0;
    for (; $inicio != $final && $inicio < $final; $inicio++, $final--) {
      $mezcla[$punt] = $this->cajita[$final];
      $punt++;
      $mezcla[$punt] = $this->cajita[$inicio];
      $punt++;
    }
    if (($this->cantcartas % 2) == 0)
      $mezcla[$punt] = $this->cajita[$inicio];
    $this->cajita = $mezcla;
    return TRUE;
  }

  public function cortar() {
    $mitadInf = [];
    $mitadSup = [];
    $mitad = count($this->cajita) / 2;
    for ($i = 0; $i < $mitad; $i++)
      $mitadInf[$i] = $this->cajita[$i];
    for ($i = 0; $mitad < count($this->cajita); $i++, $mitad++)
      $mitadSup[$i] = $this->cajita[$mitad];
    $this->cajita = array_merge($mitadSup, $mitadInf);
    return TRUE;
  }

  public function vacio() {
    if ($this->cantcartas == -1)
      return TRUE;
    return FALSE;
  }

  public function agregarCarta($carta) {
    $this->cantcartas++;
    $this->cajita[$this->cantcartas] = $carta;
    return TRUE;
  }

  public function obtenerCant() {
    return ($this->cantcartas + 1);
  }

  public function sacar() {
    if ($this->cantcartas == -1)
      return FALSE;
    $this->cantcartas--;
    return $this->cajita[($this->cantcartas + 1)];
  }

}
