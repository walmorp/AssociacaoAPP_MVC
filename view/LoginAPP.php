<?php
  @session_start();
  $_SESSION['id']=$this->getCampo("id");
  $_SESSION['cpf']=$this->getCampo("cpf");
  
  $id=$this->getCampo("id");
  $associado="";
  
  if (self::campoExiste("cpf")) {
      $associado=$this::execLogin();
  } else {
      Print "<Script LANGUAGE=\"javascript\">alert ('Acesso n�o autorizado!');</Script>";
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Associa��o Recreativa</title>
    </head>
<body>
 <table width="100%" height='900px' valign='center' align='center' border='0'>
  <tr><td valign='center' align='center'>
  <form name='formulario' id='formulario' method='POST' action=''>
   <table width="500px" height='200px' valign='center' align='center' border='1'>
    <tr class='bordaTopo' height='50px'>
    <td><center><div><h1 class='tituloAplicativo'>Associa��o Recreativa</h1></div></center></td>
    </tr>
    <tr class='bordaTopo'>
    <td valign='center' align='center'>
     <input type='hidden' name='OperaRParc' value='I'>
     <input type='hidden' name='class'      value='RelacionaParcelasAssociado'>
     <input type='hidden' name='id'         value='<?php Print $id;?>'>
     <input type='hidden' name='associado'  value='<?php Print $associado;?>'>
     <h2 class='tituloAplicativo'>Associado: <a href='javascript:;' onclick='document.formulario.submit();'><?php Print $associado;?></a></h2>
    </td>
    </tr>
   </table>
  </form>
 </td></tr></table>
</body>
</html>
