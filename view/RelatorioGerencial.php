<?php 
require_once ('controller/ValidaSessao.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Relat�rio gerencial</title>
    </head>
    <body>
     <center><div><h1 class="tituloCadastro">Relat�rio gerencial</h1></div></center>
     <?php $this::mostraRelatorio();?> 
    </body>
</html>
