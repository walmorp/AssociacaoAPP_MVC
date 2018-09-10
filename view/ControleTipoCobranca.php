<?php include 'controller/ControleCadastro.php';?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Tipos de cobran�a</title>
    </head>
<body>
<center><div><h1 class="tituloCadastro">Tipos de cobran�a</h1></div></center>
    
<form id="cadastro" name="cadastro" method="post" enctype="multipart/form-data" action="" onsubmit="return ValidaCamposTipoCobranca(); return false;">
  <table class="tabelaCadastro">
    <tr>
      <td class="labelCadastro">C�digo:</td>
      <td class="campoCadastro"><?php print $this::mostraCampoID($Dados['ID']);?></td>
    </tr>
    <tr>
      <td class="labelCadastro">Descri��o:</td>
      <td class="campoCadastro"><input class="campo" name="descricao" type="text" onblur="ValidaCampo(this);" id="descricao" size="30" maxlength="30" value="<?php print $Dados['DESCRICAO'];?>" />
        <span class="campoObrigatorio">*</span></td>
    </tr>
    <tr>
      <td class="labelCadastro">Sigla:</td>
      <td class="campoCadastro"><input class="campo" name="sigla" type="text" onblur="ValidaCampo(this);" id="sigla" size="5" maxlength="2" value="<?php print $Dados['SIGLA'];?>" />
        <span class="campoObrigatorio">*</span></td>
    </tr>
    <tr><td colspan="2">
     <?php include 'BotoesCadastro.php';?>
    </td></tr>
  </table>
</form>
<?php 
 $this::lista();
?>
</body>
</html>