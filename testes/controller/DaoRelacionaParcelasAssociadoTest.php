<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/DaoRelacionaParcelasAssociado.php');
class DaoRelacionaParcelasAssociadoTest extends TesteCase {

    /**
     * @var DaoRelacionaParcelasAssociado
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DaoRelacionaParcelasAssociado;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DaoRelacionaParcelasAssociado::getClassView
     * @todo   Implement testGetClassView().
     */
    public function testGetClassView() {
       $this->assertEquals('RelacionaParcelasAssociado', $this->object->getClassView());
    }

    /**
     * @covers DaoRelacionaParcelasAssociado::executaView
     * @todo   Implement testExecutaView().
     */
    public function testExecutaView() {
        $this->markTestIncomplete('Teste não definido.');
       //$this->assertContains('<html>', $this->object->executaView());
       //$this->assertContains('</html>', $this->object->executaView());
    }

    /**
     * @covers DaoRelacionaParcelasAssociado::mostraRelatorio
     * @todo   Implement testMostraRelatorio().
     */
    public function testMostraRelatorio() {
       $this->assertEquals(true, $this->object->mostraRelatorio());
    }

}
