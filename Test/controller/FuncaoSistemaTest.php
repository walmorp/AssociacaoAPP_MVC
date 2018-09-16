<?php
require_once '..\controller\FuncaoSistema.php';
class FuncaoSistemaTest extends PHPUnit_Framework_TestCase {

    /**
     * @var FuncaoSistema
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new FuncaoSistema;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers FuncaoSistema::opcaoSelecione
     * @todo   Implement testOpcaoSelecione().
     */
    public function testOpcaoSelecione() {
    }

    /**
     * @covers FuncaoSistema::getCampo
     * @todo   Implement testGetCampo().
     */
    public function testGetCampo() {
       $this->assertContains('app', $this->object->getCampo('app', 'app'));
    }

    /**
     * @covers FuncaoSistema::getCampoFalse
     * @todo   Implement testGetCampoFalse().
     */
    public function testGetCampoFalse() {
       $this->assertFalse($this->object->getCampoFalse('app'));
    }

    /**
     * @covers FuncaoSistema::campoExiste
     * @todo   Implement testCampoExiste().
     */
    public function testCampoExiste() {
       $this->assertFalse($this->object->getCampoFalse('app'));
    }

    /**
     * @covers FuncaoSistema::limpaNomeArq
     * @todo   Implement testLimpaNomeArq().
     */
    public function testLimpaNomeArq() {
    }

    /**
     * @covers FuncaoSistema::arrumaDataHora
     * @todo   Implement testArrumaDataHora().
     */
    public function testArrumaDataHora() {
    }

    /**
     * @covers FuncaoSistema::arrumaData
     * @todo   Implement testArrumaData().
     */
    public function testArrumaData() {
    }

    /**
     * @covers FuncaoSistema::formataValorDecimal
     * @todo   Implement testFormataValorDecimal().
     */
    public function testFormataValorDecimal() {
    }

    /**
     * @covers FuncaoSistema::converteDataParaIB
     * @todo   Implement testConverteDataParaIB().
     */
    public function testConverteDataParaIB() {
    }

    /**
     * @covers FuncaoSistema::converteDataHoraParaIB
     * @todo   Implement testConverteDataHoraParaIB().
     */
    public function testConverteDataHoraParaIB() {
    }

    /**
     * @covers FuncaoSistema::iniciaDados
     * @todo   Implement testIniciaDados().
     */
    public function testIniciaDados() {
    }

    /**
     * @covers FuncaoSistema::alterarDados
     * @todo   Implement testAlterarDados().
     */
    public function testAlterarDados() {
    }

    /**
     * @covers FuncaoSistema::apagarDados
     * @todo   Implement testApagarDados().
     */
    public function testApagarDados() {
    }

    /**
     * @covers FuncaoSistema::consultarDados
     * @todo   Implement testConsultarDados().
     */
    public function testConsultarDados() {
    }

    /**
     * @covers FuncaoSistema::montaDados
     * @todo   Implement testMontaDados().
     */
    public function testMontaDados() {
    }

    /**
     * @covers FuncaoSistema::mostraCampoID
     * @todo   Implement testMostraCampoID().
     */
    public function testMostraCampoID() {
    }

    /**
     * @covers FuncaoSistema::retornaProximoID
     * @todo   Implement testRetornaProximoID().
     */
    public function testRetornaProximoID() {
    }

    /**
     * @covers FuncaoSistema::mostraTabelaBDConectado
     * @todo   Implement testMostraTabelaBDConectado().
     */
    public function testMostraTabelaBDConectado() {
    }

    /**
     * @covers FuncaoSistema::mostraAviso
     * @todo   Implement testMostraAviso().
     */
    public function testMostraAviso() {
    }

    /**
     * @covers FuncaoSistema::popularAssociadoCadParcelas
     * @todo   Implement testPopularAssociadoCadParcelas().
     */
    public function testPopularAssociadoCadParcelas() {
    }

    /**
     * @covers FuncaoSistema::popularAssociado
     * @todo   Implement testPopularAssociado().
     */
    public function testPopularAssociado() {
    }

    /**
     * @covers FuncaoSistema::popularTipoCobranca
     * @todo   Implement testPopularTipoCobranca().
     */
    public function testPopularTipoCobranca() {
    }

    /**
     * @covers FuncaoSistema::popularSituacaoBaixa
     * @todo   Implement testPopularSituacaoBaixa().
     */
    public function testPopularSituacaoBaixa() {
    }

    /**
     * @covers FuncaoSistema::popularTitulo
     * @todo   Implement testPopularTitulo().
     */
    public function testPopularTitulo() {
    }

    /**
     * @covers FuncaoSistema::popularTipoTitulo
     * @todo   Implement testPopularTipoTitulo().
     */
    public function testPopularTipoTitulo() {
    }

    /**
     * @covers FuncaoSistema::popularSituacaoTitulo
     * @todo   Implement testPopularSituacaoTitulo().
     */
    public function testPopularSituacaoTitulo() {
    }

    /**
     * @covers FuncaoSistema::popularGenero
     * @todo   Implement testPopularGenero().
     */
    public function testPopularGenero() {
    }

    /**
     * @covers FuncaoSistema::popularCidade
     * @todo   Implement testPopularCidade().
     */
    public function testPopularCidade() {
    }

    /**
     * @covers FuncaoSistema::popularSituacaoAssociado
     * @todo   Implement testPopularSituacaoAssociado().
     */
    public function testPopularSituacaoAssociado() {
    }

}
