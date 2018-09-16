<?php
require_once ('Conexao.php');
require_once ('D:\Sistemas\XAmpp\htdocs\AssociacaoAPP_MVC\model\Relatorio.php');

class DaoImprimirParcela extends Conexao implements Relatorio {
 const CLASSE_VIEW="ImprimirParcela";

 public function getClassView() {
   return self::CLASSE_VIEW;
 }
 
 public function executaView() {
   require_once "view/".self::getClassView().".php";
   exit;
 }

 public function mostraRelatorio() {
  if (isSet($_SESSION['cpf'])) {
     $id = $_SESSION['id'];
  } else {
     $id = $this::getCampo("id");
  }
  $sql = "SELECT CB.*, S.SITUACAO, A.NOME AS ASSOCIADO, A.CPF, T.NUMERO_TITULO, TC.DESCRICAO
          FROM COBRANCA CB  LEFT JOIN TIPO_COBRANCA TC ON CB.ID_TIPO_COBRANCA = TC.ID
                            LEFT JOIN TITULO T ON CB.ID_TITULO = T.ID
                            LEFT JOIN ASSOCIADO A ON CB.ID_ASSOCIADO = A.ID
                            LEFT JOIN SITUACAO_BAIXA S ON A.ID_SITUACAO = S.ID
         WHERE CB.ID = $id
         ORDER BY CB.DATA_VENCIMENTO, T.NUMERO_TITULO";
  $r = $this::query($sql);
  return $r;
 }
}
?> 
