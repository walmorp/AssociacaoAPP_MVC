<?php 
require_once ('controller/ValidaSessao.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Relat�rio para cobrador</title>
    </head>
    <body>
     <center><div><h1 class="tituloCadastro">Relat�rio para cobrador</h1></div></center>
     <?php $this::mostraRelatorio();?> 
    </body>
</html>
