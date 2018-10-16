<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/DaoBaixarParcela.php');
class DaoBaixarParcelaTest extends TesteCase {

    /**
     * @var DaoBaixarParcela
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DaoBaixarParcela;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DaoBaixarParcela::getClassView
     * @todo   Implement testGetClassView().
     */
    public function testGetClassView() {
       $this->assertEquals('BaixarParcela', $this->object->getClassView());
    }

    /**
     * @covers DaoBaixarParcela::executaView
     * @todo   Implement testExecutaView().
     */
    public function testExecutaView() {
       $this->markTestIncomplete('Teste não definido.');
       //$this->assertContains('BaixarParcela', $this->object->executaView());
    }

    /**
     * @covers DaoBaixarParcela::getParcela
     * @todo   Implement testGetParcela().
     */
    public function testGetParcela() {
       $this->markTestIncomplete('Teste não definido.');
       //$_GET['id']='-1';
       //$this->assertEquals(true, $this->object->getParcela());
    }

    /**
     * @covers DaoBaixarParcela::gravar
     * @todo   Implement testGravar().
     */
    public function testGravar() {
       $_GET['id']='-1';
       $this->assertEquals(true, $this->object->gravar());
    }

}
