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
        $_GET['idTituloInicio']='1';
        $_GET['idTituloFinal']='99999';
        $_GET['idTitulo']='1';
        $_GET['idTipoCobranca']='1';
        $_GET['dataVencimento']='10/10/2018';
        $_GET['valorNominal']='110';
        $_GET['dataRegistroParcela']='15/10/2018';
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
        $this->assertEquals(true, $this->object->executaView());
    }

    /**
     * @covers DaoCadastraParcelas::getTabela
     * @todo   Implement testGetTabela().
     */
    public function testGetTabela() {
       $this->assertEquals('COBRANCA', $this->object->getTabela());
    }

    /**
     * @covers DaoCadastraParcelas::getParcelaProcessadas
     * @todo   Implement testGetParcelaProcessadas().
     */
    public function testGetParcelaProcessadas() {
       $this->assertEquals(true, $this->object->getParcelaProcessadas());
    }

    /**
     * @covers DaoCadastraParcelas::gravar
     * @todo   Implement testGravar().
     */
    public function testGravar() {
       $this->assertEquals(true, $this->object->gravar());
    }
}
