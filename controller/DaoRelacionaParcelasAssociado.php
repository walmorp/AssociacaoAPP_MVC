<?php
require_once ('defineVar.php');
require_once (__APP_.'controller/Conexao.php');
require_once (__APP_.'model/Relatorio.php');

class DaoRelacionaParcelasAssociado extends Conexao implements Relatorio {
 const CLASSE_VIEW="RelacionaParcelasAssociado";

 public function getClassView() {
     return self::CLASSE_VIEW;
 }
 
 public function executaView() {
   require_once (__APP_.'view/'.self::getClassView().'.php');
   return true;
 }

 public function mostraRelatorio() {
  if ((isSet($_SESSION['cpf'])) 
   && (isSet($_SESSION['id']))  
   && ($_SESSION['id'] !="0") ) {
    Print "<input type=\"button\" onclick=\"JavaScript:window.location.assign('index.php');\" value=\"Fechar\">";
    $id = $_SESSION['id'];
  } else {
    Print "<input type=\"button\" onclick=\"JavaScript:history.back();\" value=\"Voltar\">";
    $id = $this::getCampo("id");
  }
  $MostrarMetaDados = false;
  $sql = "SELECT CB.ID AS PARCELA, TC.DESCRICAO, CB.DATA_VENCIMENTO, CB.VALOR_NOMINAL, CB.VALOR_BAIXADO, S.SITUACAO,
                 T.NUMERO_TITULO, TT.TIPO
          FROM COBRANCA CB  LEFT JOIN TITULO T ON CB.ID_TITULO = T.ID
                            LEFT JOIN TIPO_TITULO TT ON T.ID_TIPO_TITULO = TT.ID
                            LEFT JOIN ASSOCIADO A ON CB.ID_ASSOCIADO = A.ID
                            LEFT JOIN TIPO_COBRANCA TC ON CB.ID_TIPO_COBRANCA = TC.ID 
                            LEFT JOIN SITUACAO_BAIXA S ON CB.ID_SITUACAO_BAIXA = S.ID
         WHERE A.ID = $id
         ORDER BY CB.DATA_VENCIMENTO, T.NUMERO_TITULO";
  if ($this::campoExiste("OperaRParc")) {
      $Opera = "I;";
  } else {
      $Opera = "B;I;";
  }
  $this::mostraTabelaBDConectado($this, $sql, $Opera, $MostrarMetaDados);
  return true;
 }
}
?> 
