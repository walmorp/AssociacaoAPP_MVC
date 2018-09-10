<?php
require_once ('Conexao.php');
require_once ('model/View.php');

class DaoLoginAPP extends Conexao implements View {
 const CLASSE_VIEW="LoginAPP";

 public function getClassView() {
     return self::CLASSE_VIEW;
 }
 
 public function executaView() {
   require_once "view/".self::getClassView().".php";
   exit;
 }
 
 public function execLogin() {
   $id  = "0".self::getCampo("id");
   $cpf = self::getCampo("cpf");
   $sql = "SELECT ID, NOME FROM ASSOCIADO WHERE ID = '$id' AND CPF = '$cpf'";
   $r = self::query($sql);
   $associado = "";

   if ($row = ibase_fetch_object($r)) {
      $id = $row->ID;
      $associado = $row->NOME;
   } else {
      Print "<Script LANGUAGE=\"JavaScript\">alert ('Acesso não autorizado!');</Script>";
      header("Location: index.php");
      exit;
    }
    return $associado;
 }
}
?> 
