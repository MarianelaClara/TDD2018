<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {

	public function testExiste(){
		$cartas = new Cartas;
		$this->assertTrue(isset($cartas));
	}

	public function testPalo() {
		$cartas = new Cartas("Basto", "3");
		$this->assertEquals($cartas->obtenerPalo(),"Basto");
	}
}
