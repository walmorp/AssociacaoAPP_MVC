<?php
  session_start();
  if (!isSet($_SESSION['id'])) {
     $_SESSION['id']="0";
  }
  require_once ('controller\Conexao.php');
  $con = new Conexao();
  $tempo1=$con->getCampo("t1", 60);
  $tempo2=$con->getCampo("t2", 180);
  $con->mostraAviso($tempo1, $tempo2);
?>