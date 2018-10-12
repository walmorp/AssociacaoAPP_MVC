<?php
require_once ('defineVar.php');
require_once (__APP_.'model/Tabela.php');
class Cobranca implements Tabela {
 const TABELA="COBRANCA";
 private $id;
 private $id_titulo;
 private $id_associado;
 private $id_tipo_cobranca;
 private $id_situacao_baixa;
 private $data_registro_parcela;
 private $data_vencimento;
 private $data_baixa;
 private $data_registro_baixa;
 private $valor_nominal;
 private $valor_acrescimo;
 private $valor_abatimentos;
 private $valor_baixado;
 
 public static function getTabela() {
     return self::TABELA;
 }
 public function getId() {
     return $this->id;
 }

 public function getId_titulo() {
     return $this->id_titulo;
 }

 public function getId_associado() {
     return $this->id_associado;
 }

 public function getId_tipo_cobranca() {
     return $this->id_tipo_cobranca;
 }

 public function getId_situacao_baixa() {
     return $this->id_situacao_baixa;
 }

 public function getData_registro_parcela() {
     return $this->data_registro_parcela;
 }

 public function getData_vencimento() {
     return $this->data_vencimento;
 }

 public function getData_baixa() {
     return $this->data_baixa;
 }

 public function getData_registro_baixa() {
     return $this->data_registro_baixa;
 }

 public function getValor_nominal() {
     return $this->valor_nominal;
 }

 public function getValor_acrescimo() {
     return $this->valor_acrescimo;
 }

 public function getValor_abatimentos() {
     return $this->valor_abatimentos;
 }

 public function getValor_baixado() {
     return $this->valor_baixado;
 }

 public function setId($id) {
     $this->id = $id;
 }

 public function setId_titulo($id_titulo) {
     $this->id_titulo = $id_titulo;
 }

 public function setId_associado($id_associado) {
     $this->id_associado = $id_associado;
 }

 public function setId_tipo_cobranca($id_tipo_cobranca) {
     $this->id_tipo_cobranca = $id_tipo_cobranca;
 }

 public function setId_situacao_baixa($id_situacao_baixa) {
     $this->id_situacao_baixa = $id_situacao_baixa;
 }

 public function setData_registro_parcela($data_registro_parcela) {
     $this->data_registro_parcela = $data_registro_parcela;
 }

 public function setData_vencimento($data_vencimento) {
     $this->data_vencimento = $data_vencimento;
 }

 public function setData_baixa($data_baixa) {
     $this->data_baixa = $data_baixa;
 }

 public function setData_registro_baixa($data_registro_baixa) {
     $this->data_registro_baixa = $data_registro_baixa;
 }

 public function setValor_nominal($valor_nominal) {
     $this->valor_nominal = $valor_nominal;
 }

 public function setValor_acrescimo($valor_acrescimo) {
     $this->valor_acrescimo = $valor_acrescimo;
 }

 public function setValor_abatimentos($valor_abatimentos) {
     $this->valor_abatimentos = $valor_abatimentos;
 }

 public function setValor_baixado($valor_baixado) {
     $this->valor_baixado = $valor_baixado;
 }
}
?>