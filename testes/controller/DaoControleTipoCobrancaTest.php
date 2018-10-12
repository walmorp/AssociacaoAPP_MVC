<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/DaoControleTipoCobranca.php');
class DaoControleTipoCobrancaTest extends TesteCase {

    /**
     * @var DaoControleTipoCobranca
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DaoControleTipoCobranca;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DaoControleTipoCobranca::getTabela
     * @todo   Implement testGetTabela().
     */
    public function testGetTabela() {
       $this->assertEquals('TIPO_COBRANCA', $this->object->getTabela());
    }

    /**
     * @covers DaoControleTipoCobranca::getClassModel
     * @todo   Implement testGetClassModel().
     */
    public function testGetClassModel() {
       $this->assertEquals('TipoCobranca', $this->object->getClassModel());
    }

    /**
     * @covers DaoControleTipoCobranca::getClassView
     * @todo   Implement testGetClassView().
     */
    public function testGetClassView() {
       $this->assertEquals('ControleTipoCobranca', $this->object->getClassView());
    }

    /**
     * @covers DaoControleTipoCobranca::executaView
     * @todo   Implement testExecutaView().
     */
    public function testExecutaView() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
       //$this->assertContains('<html>', $this->object->executaView());
       //$this->assertContains('</html>', $this->object->executaView());
    }

    /**
     * @covers DaoControleTipoCobranca::gravar
     * @todo   Implement testGravar().
     */
    public function testGravar() {
       $this->assertEquals(true, $this->object->gravar());
    }

    /**
     * @covers DaoControleTipoCobranca::existe
     * @todo   Implement testExiste().
     */
    public function testExiste() {
       $this->assertEquals(true, $this->object->existe('1'));
    }

    /**
     * @covers DaoControleTipoCobranca::insere
     * @todo   Implement testInsere().
     */
    public function testInsere() {
       $_GET['id']='';
       $this->assertEquals(true, $this->object->insere());
    }

    /**
     * @covers DaoControleTipoCobranca::altera
     * @todo   Implement testAltera().
     */
    public function testAltera() {
       $_GET['id']='1';
       $this->assertEquals(true, $this->object->altera());
    }

    /**
     * @covers DaoControleTipoCobranca::apaga
     * @todo   Implement testApaga().
     */
    public function testApaga() {
       $this->assertEquals(true, $this->object->apaga('0'));
    }

    /**
     * @covers DaoControleTipoCobranca::ler
     * @todo   Implement testLer().
     */
    public function testLer() {
       $this->assertContains(false, $this->object->ler('0'));
    }

    /**
     * @covers DaoControleTipoCobranca::lista
     * @todo   Implement testLista().
     */
    public function testLista() {
       $this->assertEquals(true, $this->object->lista());
    }

}
?>