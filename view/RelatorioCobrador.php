<?php 
require_once ('controller/ValidaSessao.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Relatório para cobrador</title>
    </head>
    <body>
     <center><div><h1 class="tituloCadastro">Relatório para cobrador</h1></div></center>
     <?php $this::mostraRelatorio();?> 
    </body>
</html>
