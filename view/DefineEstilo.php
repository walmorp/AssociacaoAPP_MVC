<?php 
 $ArqEstilo    = "controller/Estilo.css";
 $VersaoArq    = date("dmYGis", filemtime($ArqEstilo) );
 $ArqJS        = "controller/Scripts.js";
 $VersaoArqJS  = date("dmYGis", filemtime($ArqJS) );
  
 Print "<style type='text/css'> @import '$ArqEstilo?$VersaoArq';</style>\n";
 Print "<script type='text/javascript' src='$ArqJS?$VersaoArqJS'></script>\n";
?>
