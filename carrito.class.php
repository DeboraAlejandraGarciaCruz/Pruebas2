<?php 

class Carrito { 
    
   /* agregar al carrito $num productos $artnr */ 
  
   function agregar_item ($artnr, $num) {          
         if (isset($_SESSION['carrito'][$artnr])) : 
            $_SESSION['carrito'][$artnr] += $num; 
         else : 
            $_SESSION['carrito'][$artnr] = $num; 
         endif;    
   } 
    
   /* quita del carrito el producto $artnr */ 
  
   function retirar_item ($artnr) { 
         if (!isset($_SESSION['carrito'])) return false; 
          
         if (array_key_exists($artnr,$_SESSION['carrito'])) : 
               unset ($_SESSION['carrito'][$artnr]);       
               return true; 
         else : 
               return false;             
         endif;          
   } 
} 

   $carrito = new Carrito(); 

?> 
