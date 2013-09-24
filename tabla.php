<html>
   <head>
      <title>pRACTICA 3 ZEBRA</title>
   </head>
      <body>
          <?php
              define(tam,10);
                  echo "<table border=1>";
                        $n=1;
                   for ($n1=1; $n1<=tam; $n1++)
                   {
                      if ($n1 % 2 == 0){
                            echo "<tr bgcolor=#bdc3d6>";
                      }
                      else{
                            echo "<tr>";
                          }
                            for ($n2=1; $n2<=tam; $n2++)
                            {
                               echo "<td>", $n, "</td>";
                                   $n=$n+1;
                            }
                             echo "</tr>";
                   }
                          
                   
                  echo "</table>";
                  
         ?>
      </body>
</html>