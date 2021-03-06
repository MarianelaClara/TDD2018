<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartasPokerTest extends TestCase {
    /**
     * Valida que se puedan crear cartas.
     */
	public function testExiste(){
		$cartas = new CartasPoker(3, 3);
		$this->assertTrue(isset($cartas));
	}
    /**
     * Valida que el palo de la carta sea el correspondiente.
     */
	public function testPalo() {
		$cartas = new CartasPoker(0, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Corazon");
		$cartas = new CartasPoker(1, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Pika");
		$cartas = new CartasPoker(2, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Diamante");
		$cartas = new CartasPoker(3, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Trebol");
		$cartas = new CartasPoker(4, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Corazon");
		$cartas = new CartasPoker(5, 3);
		$this->assertEquals($cartas->obtenerPalo(),"Pika");
	}
    /**
     * Valida que el numero de la carta sea con el que se creo.
     */

	public function testNumero() {
		$cartas = new CartasPoker(0, 3);
        $this->assertEquals($cartas->obtenerNumero(), 3);
        $cartas = new CartasPoker(0, 10);
        $this->assertEquals($cartas->obtenerNumero(), "J");
        $cartas = new CartasPoker(0, 14);
        $this->assertEquals($cartas->obtenerNumero(), 1);
	}
}
