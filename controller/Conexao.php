<?php
require_once ('FuncaoSistema.php');

class Conexao extends FuncaoSistema {

 private $conexao;
 
 public function __construct() {
   //Print "<br>Conexao__construct: $this->conexao"; 
   $this->initialize();
 }

 private function initialize() {
   $Banco     = "127.0.0.1:D:/Sistemas/XAmpp/htdocs/AssociacaoAPP_MVC/dados/BANCOASSOCIACAO.FDB";
   $UserBanco = "SYSDBA";
   $PwBanco   = "masterkey";
 //Print "<br><br>Conectando ao banco de dados: $Banco - Usuário: $UserBanco<br>"; 
   $this->conexao = ibase_connect($Banco, $UserBanco, $PwBanco);

   If ( ibase_errmsg() <> "" ) {
      Print("<br>Erro ao connectar banco de dados!!<br>".ibase_errmsg()); 
      Exit;
   }
   ini_set ("ibase.timestampformat" ,"%m/%d/%Y %H:%M:%S");
   ini_set ("ibase.dateformat", "%m/%d/%Y");
 }            

 public function getConexao() {
   //Print "<br>Conexão: $this->conexao"; 
   return $this->conexao;
 }

 public function fecha() {
   ibase_close($this::getConexao());
   If ( ibase_errmsg() <> "" ) {
      Print("Erro no comando SQL - Close <br><br>".ibase_errmsg());  
      Exit;
   }
 }

 public function freeResult($r) {
   Ibase_free_result($r);
   If ( ibase_errmsg() <> "" ) {
       Print("Erro no comando SQL - Free_result <br><br>".ibase_errmsg());  
   }
 }

 public function query($sql) {
   $r = ibase_query(self::getConexao(), $sql);
   If ( ibase_errmsg() <> "" ) {
       Print("Erro no comando SQL <br><br>[$sql]<br><br>".ibase_errmsg());  
       Exit;
   }
   return $r;
 }

}
