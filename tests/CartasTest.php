<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {
    /**
     * Valida que se puedan crear cartas.
     */
	public function testExiste(){
		$cartas = new Cartas(3, 3);
		$this->assertTrue(isset($cartas));
	}
    /**
     * Valida que el palo de la carta sea el correspondiente.
     */
	public function testPalo() {
		$cartas = new Cartas(0, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Oro");
		$cartas = new Cartas(1, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Basto");
		$cartas = new Cartas(2, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Copa");
		$cartas = new Cartas(3, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Espada");
		$cartas = new Cartas(4, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Oro");
		$cartas = new Cartas(5, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Basto");
	}
    /**
     * Valida que el numero de la carta sea con el que se creo.
     */
	public function testNumero() {
		$cartas = new Cartas(0, 3);
		$this->assertEquals($cartas->obtenerNumero(), 3);
		$cartas = new Cartas(0, 20);
		$this->assertEquals($cartas->obtenerNumero(), 1);
	}
}
