<?php
  require_once ('defineVar.php');
  require_once ('TesteCase.php');
  require_once (__APP_.'controller/FuncaoSistema.php');
class FuncaoSistemaTest extends TesteCase {

    /**
     * @var FuncaoSistema
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new FuncaoSistema();
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
       $this->assertContains('[Selecione...]', $this->object->opcaoSelecione());
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
     * @covers FuncaoSistema::arrumaDataHora
     * @todo   Implement testArrumaDataHora().
     */
    public function testArrumaDataHora() {
        $this->assertContains("[]", "[".$this->object->arrumaDataHora("00-00-0000 00:00:00"). "]");
        $this->assertContains("31/08/2018 00:00", $this->object->arrumaDataHora("08-31-2018 00:00"));
    }

    /**
     * @covers FuncaoSistema::arrumaData
     * @todo   Implement testArrumaData().
     */
    public function testArrumaData() {
        $this->assertContains("[]", "[".$this->object->arrumaData(("00-00-0000")). "]");
        $this->assertContains("31/08/2018", $this->object->arrumaData("08-31-2018"));
    }

    /**
     * @covers FuncaoSistema::formataValorDecimal
     * @todo   Implement testFormataValorDecimal().
     */
    public function testFormataValorDecimal() {
        $this->assertContains("[]", "[".$this->object->formataValorDecimal(("")). "]");
        $this->assertContains("[]", "[".$this->object->formataValorDecimal((null)). "]");
        $this->assertContains("1000.00", $this->object->formataValorDecimal("1000"));
        $this->assertContains("1001.12", $this->object->formataValorDecimal("1001.12222"));
        $this->assertContains("1001.13", $this->object->formataValorDecimal("1001.12567"));
    }

    /**
     * @covers FuncaoSistema::converteDataParaIB
     * @todo   Implement testConverteDataParaIB().
     */
    public function testConverteDataParaIB() {
        $this->assertContains("Null", $this->object->converteDataParaIB(""));
        $this->assertContains("Null", $this->object->converteDataParaIB(null));
        $this->assertContains("Null", $this->object->converteDataParaIB(NULL));
        $this->assertContains("2018/08/31", $this->object->converteDataParaIB("31/08/2018"));
        $this->assertContains("Data inválida", $this->object->converteDataParaIB("2018/08/31"));
        $this->assertContains("Data inválida", $this->object->converteDataParaIB("08/31/2018"));
    }

    /**
     * @covers FuncaoSistema::converteDataHoraParaIB
     * @todo   Implement testConverteDataHoraParaIB().
     */
    public function testConverteDataHoraParaIB() {
        $this->assertContains("Null", $this->object->converteDataHoraParaIB(""));
        $this->assertContains("Null", $this->object->converteDataHoraParaIB(null));
        $this->assertContains("Null", $this->object->converteDataHoraParaIB(NULL));
        $this->assertContains("2018/08/31 00:00:00", $this->object->converteDataHoraParaIB("31/08/2018 00:00:00"));
        $this->assertContains("Data/hora inválida", $this->object->converteDataHoraParaIB("2018/08/31 00:00:00"));
        $this->assertContains("Data/hora inválida", $this->object->converteDataHoraParaIB("08/31/2018 00:00:00"));
    }

    /**
     * @covers FuncaoSistema::iniciaDados
     * @todo   Implement testIniciaDados().
     */
    public function testIniciaDados() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::alterarDados
     * @todo   Implement testAlterarDados().
     */
    public function testAlterarDados() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::apagarDados
     * @todo   Implement testApagarDados().
     */
    public function testApagarDados() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::consultarDados
     * @todo   Implement testConsultarDados().
     */
    public function testConsultarDados() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::montaDados
     * @todo   Implement testMontaDados().
     */
    public function testMontaDados() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::mostraCampoID
     * @todo   Implement testMostraCampoID().
     */
    public function testMostraCampoID() {
       $this->assertContains('1', $this->object->mostraCampoID("1"));
    }

    /**
     * @covers FuncaoSistema::retornaProximoID
     * @todo   Implement testRetornaProximoID().
     */
    public function testRetornaProximoID() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::mostraTabelaBDConectado
     * @todo   Implement testMostraTabelaBDConectado().
     */
    public function testMostraTabelaBDConectado() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::mostraAviso
     * @todo   Implement testMostraAviso().
     */
    public function testMostraAviso() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularAssociadoCadParcelas
     * @todo   Implement testPopularAssociadoCadParcelas().
     */
    public function testPopularAssociadoCadParcelas() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularAssociado
     * @todo   Implement testPopularAssociado().
     */
    public function testPopularAssociado() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularTipoCobranca
     * @todo   Implement testPopularTipoCobranca().
     */
    public function testPopularTipoCobranca() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularSituacaoBaixa
     * @todo   Implement testPopularSituacaoBaixa().
     */
    public function testPopularSituacaoBaixa() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularTitulo
     * @todo   Implement testPopularTitulo().
     */
    public function testPopularTitulo() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularTipoTitulo
     * @todo   Implement testPopularTipoTitulo().
     */
    public function testPopularTipoTitulo() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularSituacaoTitulo
     * @todo   Implement testPopularSituacaoTitulo().
     */
    public function testPopularSituacaoTitulo() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularGenero
     * @todo   Implement testPopularGenero().
     */
    public function testPopularGenero() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularCidade
     * @todo   Implement testPopularCidade().
     */
    public function testPopularCidade() {
       $this->markTestIncomplete('Teste não definido.');
    }

    /**
     * @covers FuncaoSistema::popularSituacaoAssociado
     * @todo   Implement testPopularSituacaoAssociado().
     */
    public function testPopularSituacaoAssociado() {
       $this->markTestIncomplete('Teste não definido.');
    }

}
