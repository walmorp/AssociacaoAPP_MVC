<?php require_once ('controller/ValidaSessao.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Inicio</title>
    </head>
    <body>
     <center><h2>Parcelas em aberto</h2></center>
     <?php $this::mostraParcelasEmAberto();?> 
     <center><h2>Associados ativos</h2></center>
     <?php $this::mostraAssociadosAtivos();?> 
     <center><h2>Títulos ativos</h2></center>
     <?php $this::mostraTitulosAtivos();?> 
    </body>
</html>
