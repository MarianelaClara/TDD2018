<?php

namespace TDD;

class Cartas {

    protected $palo;
    protected $numero;

/**
 * Le da los parametros iniciales a la carta.
 *
 * @param string $palo
 *   Es el palo de la carta a crear.
 *
 * @param int $numero
 *    El numero de la carta a crear.
 * 
 * @return
 */

    public function __construct($palo, $numero) {
        if ($numero <= 0 || $numero > 12)
            $this->numero = 1;
        else
            $this->numero = $numero;
        if ($palo % 4 == 0)
            $this->palo = "Oro";
        elseif ($palo % 4 == 1)
            $this->palo = "Basto";
        elseif ($palo % 4 == 2)
            $this->palo = "Copa";
        elseif ($palo % 4 == 3)
            $this->palo = "Espada";
    }

/**
 * Obtiene el palo de la carta.
 *
 * @param
 *
 * @return string
 *   Devuelve el palo de la carta.
 */

    public function obtenerPalo() {
        return $this->palo;
    }

/**
 * Obtiene el numero de la carta .
 *
 * @param
 *
 * @return int
 *   Devuelve el numero de la carta.
 */

    public function obtenerNumero() {
        return $this->numero;
    }
}

