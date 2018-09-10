<?php 
 include 'controller/ControleCadastro.php';
 $opSituacaoTitulo = $this::getCampo("opST", "A");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'DefineHeadMeta.php';?>
        <?php include 'DefineEstilo.php';?>
        <title>Controle de t�tulos</title>
    </head>
<body>
<center><div><h1 class="tituloCadastro">Controle de t�tulos <?php if ($opSituacaoTitulo=="I") {Print "inativos";} ?></h1></div></center>

<form id="cadastro" name="cadastro" method="post" enctype="multipart/form-data" action="" onsubmit="return ValidaCamposTitulos(); return false;">
  <table class="tabelaCadastro">
    <tr>
      <td class="labelCadastro">C�digo do t�tulo:</td>
      <td class="campoCadastro" colspan="3"><?php print $this::mostraCampoID($Dados['ID']);?></td>
    </tr>
    <tr>
      <td class="labelCadastro">N�mero do t�tulo:</td>
      <td class="campoCadastro"><input class="campo" name="numeroTitulo" type="text" onblur="ValidaCampo(this);" id="numeroTitulo" size="25" maxlength="25" value="<?php print $Dados['NUMERO_TITULO'];?>" />
        <span class="campoObrigatorio">*</span></td>
      <td class="labelCadastro">Nome&nbspdo&nbspassociado:</td>
      <td class="campoCadastro">
          <select class="campo" name="idAssociado" id="idAssociado" onblur="ValidaCampo(this);" value="<?php print $Dados['ID_ASSOCIADO'];?>"><?php $this::popularAssociado($this, $Dados['ID_ASSOCIADO']);?></select>
        <span class="campoObrigatorio">*</span></td>
    </tr>
    <tr>
      <td class="labelCadastro">Data da compra:</td>
      <td class="campoCadastro"><input class="campo" name="dataSocio" type="text" onblur="FormataData(this);" id="dataSocio" size="10" maxlength="10" value="<?php print $this::arrumaData($Dados['DATA_SOCIO']);?>" />
        <span class="campoObrigatorio">*</span></td>
      <td class="labelCadastro">Tipo do t�tulo:</td>
      <td class="campoCadastro">
        <select class="campo" name="idTipoTitulo" id="idTipoTitulo" onblur="ValidaCampo(this);" value="<?php print $Dados['ID_TIPO_TITULO'];?>"><?php $this::popularTipoTitulo($this, $Dados['ID_TIPO_TITULO']);?></select>
        <span class="campoObrigatorio">*</span></td>
    </tr>
    <tr>
      <td class="labelCadastro">Situa��o do t�tulo:</td>
      <td class="campoCadastro" colspan="3"><select class="campo" name="idSituacaoTitulo" id="idSituacaoTitulo" onblur="ValidaCampo(this);" value="<?php print $Dados['ID_SITUACAO_TITULO'];?>"><?php $this::popularSituacaoTitulo($this, $Dados['ID_SITUACAO_TITULO']);?></select>
        <span class="campoObrigatorio">*</span></td>
    </tr>
    <tr><td colspan="4">
     <?php include 'BotoesCadastro.php';?>
     <input name="opST" type="hidden" id="opST" value="<?php print $opSituacaoTitulo;?>" />
    </td></tr>
  </table>
</form>
<?php $this::lista();?>
</body>
</html>
