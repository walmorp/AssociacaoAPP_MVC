<?php
require_once ('defineVar.php');
require_once (__APP_.'controller/Conexao.php');
require_once (__APP_.'model/Relatorio.php');

class DaoRelatorioGerencial extends Conexao implements Relatorio {
 const CLASSE_VIEW="RelatorioGerencial";

 public function getClassView() {
     return self::CLASSE_VIEW;
 }
 
 public function executaView() {
   require_once (__APP_.'view/'.self::getClassView().'.php');
   exit;
 }

 public function mostraRelatorio() {
  $MostrarMetaDados = false;
  $sql = "SELECT CB.ID AS PARCELA, CB.DATA_VENCIMENTO, CB.VALOR_NOMINAL, CB.VALOR_BAIXADO, S.SITUACAO,
                 A.NOME||' ('||A.CPF||')' AS ASSOCIADO, T.NUMERO_TITULO, TT.TIPO, ST.SITUACAO AS SITUACAO_TITULO
          FROM COBRANCA CB  LEFT JOIN TITULO T ON CB.ID_TITULO = T.ID
                            LEFT JOIN TIPO_TITULO TT ON T.ID_TIPO_TITULO = TT.ID
                            LEFT JOIN SITUACAO_TITULO St ON T.ID_SITUACAO_TITULO = ST.ID 
                            LEFT JOIN ASSOCIADO A ON CB.ID_ASSOCIADO = A.ID
                            LEFT JOIN SITUACAO_BAIXA S ON CB.ID_SITUACAO_BAIXA = S.ID
         ORDER BY A.NOME, CB.DATA_VENCIMENTO, T.NUMERO_TITULO";
  $Opera = "B;I;";
  $this::mostraTabelaBDConectado($this, $sql, $Opera, $MostrarMetaDados);
 }
}
?>