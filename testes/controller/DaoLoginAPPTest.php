<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/DaoLoginAPP.php');
class DaoLoginAPPTest extends TesteCase {

    /**
     * @var DaoLoginAPP
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DaoLoginAPP;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DaoLoginAPP::getClassView
     * @todo   Implement testGetClassView().
     */
    public function testGetClassView() {
       $this->assertEquals('LoginAPP', $this->object->getClassView());
    }

    /**
     * @covers DaoLoginAPP::executaView
     * @todo   Implement testExecutaView().
     */
    public function testExecutaView() {
        $this->markTestIncomplete('Teste não definido.');
       //$this->assertContains('<html>', $this->object->executaView());
       //$this->assertContains('</html>', $this->object->executaView());
    }

    /**
     * @covers DaoLoginAPP::execLogin
     * @todo   Implement testExecLogin().
     */
    public function testExecLogin() {
        $this->markTestIncomplete('Teste não definido.');
    }

}
