<?php

require_once '..\controller\DaoImprimirParcela.php';
 
// indica o arquivo de classe a ser testado
class DaoImprimirParcelaTest extends PHPUnit_Framework_TestCase {
  protected $object;
  protected function setup() {
    $this->object = new DaoImprimirParcela();
  }
 
  public function testgetClassView() {
    Print " - getClassView(): " . $this->object->getClassView();
    $this->assertTrue(true);
    $this->assertContains('Imprimir', $this->object->getClassView(), '', true);
    $this->assertContains('Parcela', $this->object->getClassView(), '', true);
    $this->assertContains('ImprimirParcela', $this->object->getClassView(), '', true);
    
    //$this->assertEquals("view/ImprimirParcela.php", $this->object->getClassView(), 0, false, false);
    // verifica se é igual
  }
}
?>