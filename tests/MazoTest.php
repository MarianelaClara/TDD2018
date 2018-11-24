<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }
    /**
     * Valida que se pueda mezclar el mazo.
     */
    public function testMezclable() {
        $mazo = new Mazo;
        $mazo2= new Mazo;
        $carta1= new Cartas(2, 1);
        $carta2= new Cartas(2, 2);
        $carta3= new Cartas(2, 3);
        $carta4= new Cartas(2, 4);
        $carta5= new Cartas(2, 5);
        $mazo->agregarCarta($carta1);
        $mazo->agregarCarta($carta2);
        $mazo->agregarCarta($carta3);
        $mazo->agregarCarta($carta4);
        $mazo->agregarCarta($carta5);
        $mazo2->agregarCarta($carta1);
        $mazo2->agregarCarta($carta2);
        $mazo2->agregarCarta($carta3);
        $mazo2->agregarCarta($carta4);
        $mazo2->agregarCarta($carta5);
        $this->assertTrue($mazo->mezclar());
        $this->assertNotEquals($mazo, $mazo2);
    }
    /**
     * Valida que se pueda cortar el mazo.
     */
    public function testCortar(){
        $mazo = new Mazo;
        $mazo2= new Mazo;
        $carta1= new Cartas(2, 1);
        $carta2= new Cartas(2, 2);
        $carta3= new Cartas(2, 3);
        $carta4= new Cartas(2, 4);
        $carta5= new Cartas(2, 5);
        $mazo->agregarCarta($carta1);
        $mazo->agregarCarta($carta2);
        $mazo->agregarCarta($carta3);
        $mazo->agregarCarta($carta4);
        $mazo->agregarCarta($carta5);
        $mazo2->agregarCarta($carta1);
        $mazo2->agregarCarta($carta2);
        $mazo2->agregarCarta($carta3);
        $mazo2->agregarCarta($carta4);
        $mazo2->agregarCarta($carta5);
        $this->assertTrue($mazo->cortar());
        $this->assertNotEquals($mazo, $mazo2);
    }
	
    /**
     * Valida que el mazo vacio sea reconocido.
     */
    public function testVacio(){
	    $mazo= new Mazo;
	    $this->assertTrue($mazo->vacio());   
    }
    /**
     * Valida que se puedan agregar cartas al mazo.
     */
    public function testAgregarCarta() {
        $mazo= new Mazo;
        $this->assertEquals($mazo->obtenerCant(), 0);
        $carta= new Cartas(2, 3);
        $this->assertTrue($mazo->agregarCarta($carta));
        $this->assertEquals($mazo->obtenerCant(), 1);
    }
    /**
     * Valida que se devuelvan la cantidad correcta de cartas en un mazo.
     */
    public function testCantidadCartas(){
        $mazo= new Mazo;
        $this->assertEquals($mazo->obtenerCant(),0);
        $carta= new Cartas( 2, 3);
        $mazo->agregarCarta($carta);
        $this->assertEquals($mazo->obtenerCant(),1);
        $mazo->agregarCarta($carta);
        $this->assertEquals($mazo->obtenerCant(),2);
        $mazo->agregarCarta($carta);
        $this->assertEquals($mazo->obtenerCant(),3);
    }
    /**
     * Valida que se quiten las cartas correctamente del mazo.
     */
    public function testDevolverCarta(){
        $mazo= new Mazo;
        $carta1= new Cartas( 0, 3);
        $carta2= new Cartas( 1, 1);
        $this->assertFalse($mazo->sacar());
        $mazo->agregarCarta($carta1);
        $mazo->agregarCarta($carta2);
        $this->assertEquals($mazo->sacar(), $carta2);
        $this->assertEquals($mazo->sacar(), $carta1);
        $this->assertFalse($mazo->sacar());
    }
}

    
