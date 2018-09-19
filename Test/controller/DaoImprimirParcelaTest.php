<?php
require_once '..\controller\DaoImprimirParcela.php';
class DaoImprimirParcelaTest extends PHPUnit_Framework_TestCase {

    /**
     * @var DaoImprimirParcela
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DaoImprimirParcela;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DaoImprimirParcela::getClassView
     * @todo   Implement testGetClassView().
     */
    public function testGetClassView() {
       $this->assertContains('Imprimir', $this->object->getClassView());
       $this->assertContains('Parcela', $this->object->getClassView(), '');
       $this->assertContains('ImprimirParcela', $this->object->getClassView(), '', true);
       //$this->assertContains('ImprimirParcela.php', $this->object->getClassView());
    }

    /**
     * @covers DaoImprimirParcela::mostraRelatorio
     * @todo   Implement testMostraRelatorio().
     */
    public function testMostraRelatorio() {
       //$this->assertFalse($this->object->mostraRelatorio(), true);
    }

    /**
     * @covers DaoImprimirParcela::executaView
     * @todo   Implement testExecutaView().
     */
    public function testExecutaView() {
       //$this->assertFalse($this->object->executaView(), true);
    }

}
