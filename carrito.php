<?php 

   require_once ("global.php"); 
    
?> 
<h3>Carrito de compras!</h3> 
<a href="carrito.php"><img src="vercarrito.gif" width="24" height="21" border="0"> [ver carrito]</a> 
<hr> 
<br> 

<?php    
             
   if (isset($_POST['id_item']) && isset($_POST['cantidad'])) {    
         $carrito->agregar_item ($_POST['id_item'],$_POST['cantidad']); 
   }    
    
   if (isset($_GET['act']) && $_GET['act'] == "del" && is_numeric($_GET['item']) && $carrito->retirar_item ($_GET['item'])) { 
       
   } 
    
   if (isset($_SESSION['carrito']) && sizeof($_SESSION['carrito']) > 0) : 
    
         $sql = "SELECT id_item,nombre,precio FROM items WHERE "; 
       
         foreach (array_keys($_SESSION['carrito']) as $item) { 
               $sql .= "id_item = ".$item." OR "; 
         }    
          
         $sql = substr ($sql,-strlen($sql),strlen($sql)-4); 
         $res = do_sql ($sql); 
       
         echo "<h4>Estado del carrito</h4>"; 
         echo "<table width=\"80%\" border=\"1\">"; 
         $total = 0; 
          
         while ($row = mysql_fetch_array($res)) { 
               echo "<tr> 
                           <td width=\"74%\">".$row['nombre']."</td> 
                           <td width=\"9%\">".$_SESSION['carrito'][$row['id_item']]."</td> 
                           <td width=\"12%\">$".$row['precio']*$_SESSION['carrito'][$row['id_item']]."</td> 
                           <td width=\"5%\"><a href=\"carrito.php?act=del&item=".$row['id_item']."\"><img src=\"trash.gif\" border=\"0\"></a></td> 
                       </tr>"; 
               $total += $row['precio']*$_SESSION['carrito'][$row['id_item']];                         
         } 

         echo "</table><br>"; 
          
         echo "<table width=\"80%\" border=\"1\"> 
                     <tr> 
                        <td width=\"83%\">TOTAL</td> 
                        <td width=\"27%\">$".$total."</td> 
                     </tr> 
                  </table>";                              
  else : 
     echo "no hay productos en el carrito!!"; 
  endif; 
  
  echo "<br><br><a href=\"\">[realizar la compra]</a> - <a href=\"carro.php\">[seguir comprando]</a>";          

?> 

