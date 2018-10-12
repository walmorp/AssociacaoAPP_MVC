<?php
require_once ('defineVar.php');
require_once (__APP_.'model/Tabela.php');
class TipoCobranca implements Tabela {
 const TABELA="TIPO_COBRANCA";
 private $id;
 private $descricao;
 private $sigla;
 
 public static function getTabela() {
     return self::TABELA;
 }

 public function getId() {
     return $this->id;
 }

 public function getNome() {
     return $this->descricao;
 }

 public function getSigla() {
     return $this->sigla;
 }

 public function setId($id) {
     $this->id = $id;
 }

 public function setNome($descricao) {
     $this->nome = $descricao;
 }

 public function setSigla_uf($sigla) {
     $this->sigla = $sigla;
 }
 
}
?>