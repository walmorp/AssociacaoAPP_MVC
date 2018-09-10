<?php
require_once ('model/Tabela.php');
class Associado implements Tabela {
 const TABELA="ASSOCIADO";
 private $id;
 private $nome;
 private $id_genero;
 private $endereco;
 private $nascimento;
 private $cpf;
 private $id_cidade;
 private $id_situacao;
 
 public static function getTabela() {
     return self::TABELA;
 }

 public function getId() {
     return $this->id;
 }

 public function getNome() {
     return $this->nome;
 }

 public function getId_genero() {
     return $this->id_genero;
 }

 public function getEndereco() {
     return $this->endereco;
 }

 public function getNascimento() {
     return $this->nascimento;
 }

 public function getCpf() {
     return $this->cpf;
 }

 public function getId_cidade() {
     return $this->id_cidade;
 }

 public function getId_situacao() {
     return $this->id_situacao;
 }

 public function setId($id) {
     $this->id = $id;
 }

 public function setNome($nome) {
     $this->nome = $nome;
 }

 public function setId_genero($id_genero) {
     $this->id_genero = $id_genero;
 }

 public function setEndereco($endereco) {
     $this->endereco = $endereco;
 }

 public function setNascimento($nascimento) {
     $this->nascimento = $nascimento;
 }

 public function setCpf($cpf) {
     $this->cpf = $cpf;
 }

 public function setId_cidade($id_cidade) {
     $this->id_cidade = $id_cidade;
 }

 public function setId_situacao($id_situacao) {
     $this->id_situacao = $id_situacao;
 }
}
?>