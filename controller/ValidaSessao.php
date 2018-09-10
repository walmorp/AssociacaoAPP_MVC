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
//  print get_include_path()."<br>";
//  $path = 'D:\\Sistemas\\XAmpp\\htdocs\\AssociacaoAPP_MVC\\' . PATH_SEPARATOR . 
//          'D:\\Sistemas\\XAmpp\\htdocs\AssociacaoAPP_MVC\\view\\' . PATH_SEPARATOR . 
//          'D:\\Sistemas\\XAmpp\\htdocs\\AssociacaoAPP_MVC\\model\\' . PATH_SEPARATOR . 
//          'D:\\Sistemas\\XAmpp\\htdocs\\AssociacaoAPP_MVC\\controller\\';
//  set_include_path(get_include_path() . PATH_SEPARATOR . $path);
//  print get_include_path()."<br>";
?> 