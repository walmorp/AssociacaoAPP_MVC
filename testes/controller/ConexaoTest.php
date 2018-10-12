<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/Conexao.php');
class ConexaoTest extends TesteCase {

    /**
     * @var Conexao
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Conexao;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Conexao::getConexao
     * @todo   Implement testGetConexao().
     */
    public function testGetConexao() {
       $this->assertEquals(true, $this->object->getConexao());
    }

    /**
     * @covers Conexao::fecha
     * @todo   Implement testFecha().
     */
    public function testFecha() {
       $this->assertEquals(true, $this->object->fecha());
    }

    /**
     * @covers Conexao::freeResult
     * @todo   Implement testFreeResult().
     */
    public function testFreeResult() {
       $this->assertEquals(true, $this->object->freeResult(null));
    }

    /**
     * @covers Conexao::query
     * @todo   Implement testQuery().
     */
    public function testQuery() {
       $this->markTestIncomplete('Teste não definido.');
    }

}
