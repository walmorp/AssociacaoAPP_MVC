<?php 
  require_once ('defineVar.php');
  require_once (__APP_.'controller/ValidaSessao.php');

  $_SESSION['id']=$this::getCampo("id");
  
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once (__APP_.'view/DefineHeadMeta.php');?>
        <?php require_once (__APP_.'view/DefineEstilo.php');?>
        <title>Relatório de cobrança</title>
    </head>
    <body>
    <center><div><h1 class="tituloCadastro">Relatório de cobrança - <?php print $this::getCampo("associado"); ?></h1></div></center>
     <?php $this::mostraRelatorio();?> 
    </body>
</html>
