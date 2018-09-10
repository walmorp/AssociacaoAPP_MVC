<?php 
  require_once ('controller/ValidaSessao.php');

  $_SESSION['id']=$this::getCampo("id");
  
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Relatório de cobrança</title>
    </head>
    <body>
    <center><div><h1 class="tituloCadastro">Relatório de cobrança - <?php print $this::getCampo("associado"); ?></h1></div></center>
     <?php $this::mostraRelatorio();?> 
    </body>
</html>
