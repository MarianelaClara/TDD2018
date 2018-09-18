<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {

	public function testExiste(){
		$cartas = new Cartas;
		$this->assertTrue(isset($cartas));
	}
}
