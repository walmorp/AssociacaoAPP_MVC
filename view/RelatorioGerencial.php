<?php 
require_once ('controller/ValidaSessao.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Relatório gerencial</title>
    </head>
    <body>
     <center><div><h1 class="tituloCadastro">Relatório gerencial</h1></div></center>
     <?php $this::mostraRelatorio();?> 
    </body>
</html>
