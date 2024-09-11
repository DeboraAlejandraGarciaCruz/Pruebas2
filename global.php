<?php 

      require_once ("lib/carrito.class.php"); 
      session_start(); 
       
      function do_sql ($sql) { 
         mysql_connect ("localhost","root",""); 
         mysql_select_db ("carrito"); 
          
         $res = mysql_query ($sql) or die ("SQL incorrecto : $sql"); 
         return $res;       
      } 
             
?> 
