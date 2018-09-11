<?php 

 $lHTTP_HOST = $_SERVER['HTTP_HOST'];
 $lHTTP_REFERER = $_SERVER['HTTP_REFERER'];
 $Referer = explode($lHTTP_HOST, $lHTTP_REFERER);
 
 if ( count($Referer) <= 1) { 
    print "<script>alert ('$lHTTP_REFERER - Modo de acesso não autorizado!'); history.back();</script>";
    Exit;
 }
 //session_start();
 If (!isset($_SESSION['id'])) {
    print "<script>alert ('Sessão não iniciada - Modo de acesso não autorizado!');\n history.back();</script>";
    Exit;
 }
 
 set_time_limit(600); 

?> 