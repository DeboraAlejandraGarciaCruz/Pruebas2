<?php 

   require_once ("global.php"); 
?> 

<h3>Carrito de compras!
  <?php    

   /* entra a la categoria seleccionada */ 
    
   if (isset($_GET['cat']) && is_numeric($_GET['cat'])) { 
      if (isset($_GET['item']) && is_numeric($_GET['item'])) { 
       
         $sql = "SELECT * FROM items WHERE id_item = ".$_GET['item']; 
        $res = do_sql ($sql); 
        $row = mysql_fetch_array ($res); 
       
         echo "<form method=\"post\" action=\"carrito.php\"> 
                  <table width=\"58%\" height=\"146\" border=\"1\"> 
                    <tr> 
                      <td width=\"43%\" height=\"100\">&nbsp;imagen</td> 
                      <td width=\"57%\" valign=\"top\"><h4>".$row['descripcion']."</h4></td> 
                    </tr> 
                    <tr> 
                      <td height=\"38\" align=\"center\"><h6>".$row['nombre']."<br>$".$row['precio']."</h6></td> 
                      <td>Cantidad : <input type=\"text\" name=\"cantidad\" size=\"3\" value=\"1\"> 
                         <input type=\"hidden\" name=\"id_item\" value=\"".$row['id_item']."\"> 
                         <input type=\"submit\" value=\"Agregar\"> 
                        </td> 
                    </tr> 
                  </table> 
                  </form>"; 
         exit; 
      } 
       
      $sql = "SELECT id_item,nombre,id_cat FROM items WHERE id_cat = ".$_GET['cat']." ORDER BY nombre"; 
      $res = do_sql ($sql); 
       
      if (!mysql_num_rows($res)) { 
         echo "No hay items en esta categor�a!"; 
      } else {       
         echo "<ul>"; 
         while ($row = mysql_fetch_array($res)) { 
       
            echo "<li><b><a href=\"carro.php?cat=".$row['id_cat']."&item=".$row['id_item']."\">".$row['nombre']."</a></b></li> 
                     <br><br>"; 
         } 
         echo "</ul>"; 
      }    
       
   } else { 
    
   /* muestra categorias existentes en la DB */ 
    
      $sql = "SELECT * FROM categorias ORDER BY nombre"; 
      $res = do_sql ($sql); 
       
      echo "<ul>"; 
      while ($row = mysql_fetch_array($res)) { 
       
         echo "<li><b><a href=\"carro.php?cat=".$row['id_cat']."\">".$row['nombre']."</a></b></li> 
                  <br><i>".$row['descripcion']."</i> 
                  <br><br>"; 
      } 
      echo "</ul>"; 
   } 
    
?>
</h3> 
<a href="carrito.php"><img src="vercarrito.gif" width="24" height="21" border="0"> [ver carrito]</a> 
<hr> 
<br>
