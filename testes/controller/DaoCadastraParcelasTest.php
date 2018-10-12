<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/DaoCadastraParcelas.php');
class DaoCadastraParcelasTest extends TesteCase {

    /**
     * @var DaoCadastraParcelas
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DaoCadastraParcelas;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DaoCadastraParcelas::getClassView
     * @todo   Implement testGetClassView().
     */
    public function testGetClassView() {
       $this->assertEquals('CadastraParcelas', $this->object->getClassView());
    }

    /**
     * @covers DaoCadastraParcelas::executaView
     * @todo   Implement testExecutaView().
     */
    public function testExecutaView() {
        $this->markTestIncomplete('Teste não definido.');
       //$this->assertContains('CadastraParcelas', $this->object->executaView());
    }

    /**
     * @covers DaoCadastraParcelas::getTabela
     * @todo   Implement testGetTabela().
     */
    public function testGetTabela() {
       $this->assertEquals('COBRANCA', $this->object->getClassView());
    }

    /**
     * @covers DaoCadastraParcelas::getParcelaProcessadas
     * @todo   Implement testGetParcelaProcessadas().
     */
    public function testGetParcelaProcessadas() {
        $this->markTestIncomplete('Teste não definido.');
       //$this->assertContains('CadastraParcelas', $this->object->getParcelaProcessadas());
    }

    /**
     * @covers DaoCadastraParcelas::gravar
     * @todo   Implement testGravar().
     */
    public function testGravar() {
        $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers DaoCadastraParcelas::gravaVarios
     * @todo   Implement testGravaVarios().
     */
    public function testGravaVarios() {
        $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers DaoCadastraParcelas::gravaCobranca
     * @todo   Implement testGravaCobranca().
     */
    public function testGravaCobranca() {
        $this->markTestIncomplete('Teste não definido.');
    }

}
