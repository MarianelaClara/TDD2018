<?php

namespace TDD;

class Mazo {
  protected $cantcartas = -1;
  protected $cajita = [];

/**
 * Mezcla las cartas de un mazo.
 *
 * @param 
 *
 * @return Bool
 *   Devuelve True una vez se encuentren mezcladas las cartas.
 */

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

/**
 * Corta y vuelve a juntar un mazo de cartas.
 *
 * @param
 *
 * @return Bool
 *   Devuelve True cuando la funcion es completada.
 */

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

/**
 * Indica si un mazo es vacio.
 *
 * @param
 *
 * @return Bool
 *   Devuelve True en caso de mazo vacio, y False en caso contrario.
 */

  public function vacio() {
    if ($this->cantcartas == -1)
      return TRUE;
    return FALSE;
  }

/**
 * Agrega una carta al mazo de cartas.
 *
 * @param Class Cartas $carta
 *   La carta a agregar al mazo.
 *
 * @return Bool
 *   Devuelve True si se agrega una carta al mazo.
 */
  public function agregarCarta($carta) {
    $this->cantcartas++;
    $this->cajita[$this->cantcartas] = $carta;
    return TRUE;
  }
/**
 * Obtiene la cantidad de cartas en el mazo.
 *
 * @param
 *
 * @return int
 *   La cantidad de cartas del mazo.
 */

  public function obtenerCant() {
    return ($this->cantcartas + 1);
  }
/**
 * Saca la carta que se encuentra en la cima del mazo.
 *
 * @param
 *
 * @return Bool
 *   En caso de que no se pueda sacar la carta, ya que el mazo es vacio.
 *  @return Class Cartas *
 *   Devuelve un array de cartas que representa al
 */
  public function sacar() {
    if ($this->cantcartas == -1)
      return FALSE;
    $this->cantcartas--;
    return $this->cajita[($this->cantcartas + 1)];
  }

}
