<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/DaoControleAssociado.php');
class DaoControleAssociadoTest extends TesteCase {

    /**
     * @var DaoControleAssociado
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DaoControleAssociado;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DaoControleAssociado::getTabela
     * @todo   Implement testGetTabela().
     */
    public function testGetTabela() {
       $this->assertEquals('ASSOCIADO', $this->object->getTabela());
    }

    /**
     * @covers DaoControleAssociado::getClassModel
     * @todo   Implement testGetClassModel().
     */
    public function testGetClassModel() {
       $this->assertEquals('Associado', $this->object->getClassModel());
    }

    /**
     * @covers DaoControleAssociado::getClassView
     * @todo   Implement testGetClassView().
     */
    public function testGetClassView() {
       $this->assertEquals('ControleAssociado', $this->object->getClassView());
    }

    /**
     * @covers DaoControleAssociado::executaView
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
     * @covers DaoControleAssociado::gravar
     * @todo   Implement testGravar().
     */
    public function testGravar() {
       $this->assertEquals(true, $this->object->gravar());
    }

    /**
     * @covers DaoControleAssociado::existe
     * @todo   Implement testExiste().
     */
    public function testExiste() {
       $this->assertEquals(true, $this->object->existe('1'));
    }

    /**
     * @covers DaoControleAssociado::insere
     * @todo   Implement testInsere().
     */
    public function testInsere() {
       $_GET['id']='';
       $_GET['nascimento']='01/01/2001';
       $this->assertEquals(true, $this->object->insere());
    }

    /**
     * @covers DaoControleAssociado::altera
     * @todo   Implement testAltera().
     */
    public function testAltera() {
       $_GET['id']='1';
       $_GET['nascimento']='01/01/2001';
       $this->assertEquals(true, $this->object->altera());
    }

    /**
     * @covers DaoControleAssociado::apaga
     * @todo   Implement testApaga().
     */
    public function testApaga() {
       $this->assertEquals(true, $this->object->apaga('0'));
    }

    /**
     * @covers DaoControleAssociado::ler
     * @todo   Implement testLer().
     */
    public function testLer() {
       $this->assertContains(false, $this->object->ler('0'));
    }

    /**
     * @covers DaoControleAssociado::lista
     * @todo   Implement testLista().
     */
    public function testLista() {
       $this->assertEquals(true, $this->object->lista());
    }

}
?>