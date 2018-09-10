<?php
require_once ('model/View.php');
interface Cadastro extends View {
 public function getTabela();
 public function getClassModel();
 public function gravar();
 public function existe($id);
 public function insere();
 public function altera();
 public function apaga($id);
 public function ler($id);
 public function lista($filtro="");
}
?>