<?php 
  require_once ('controller/ValidaSessao.php');

  $_SESSION['id']=$this::getCampo("id");
  
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Relat�rio de cobran�a</title>
    </head>
    <body>
    <center><div><h1 class="tituloCadastro">Relat�rio de cobran�a - <?php print $this::getCampo("associado"); ?></h1></div></center>
     <?php $this::mostraRelatorio();?> 
    </body>
</html>
