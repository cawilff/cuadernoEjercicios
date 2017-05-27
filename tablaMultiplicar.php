<?php

/*
 * Tabla de multiplicar del 2 usando diferentes estructuras de control
 * for, while y do while. 
 */

?>
<html>
    <head>
        <title>Tabla de multiplicar del 2</title>
        
    </head>
    <body>
        <h1>Tabla de multiplicar del 2</h1>
        <table border="2">
        <?php
        echo "tabla de multilicar con for{}";
        //for($i=1;$i<=10;$i++){
          //  echo"<tr>";
            for($j=1;$j<=10;$j++){
                echo"<tr>";
                $mult=$j*2;
            /*    echo "<td>";
                echo"$j";
                echo"</td>";
                echo"<td>";
                echo"X";
                echo"</td>";
                echo "<td>";
                echo "2";
                echo "<td> = </td>";
                echo"<td>";
                $mult=$j*2;
                echo"$mult";
                echo"</td>";
                //echo"</br>";
               */echo "<td>$j X 2 =$mult";
                
                echo"</tr>";
            }
        //}
        echo "</table>";
        echo "<table border='2'";
            echo "</br>\n";
        echo "tabla con while{}";
        $contador=1;
        while($contador<=10){
         echo "<tr>";
         $res=$contador*2;
         echo "<td>$contador X 2= $res";
         echo"</tr>";
         $contador++;
        }
        ?>
        </table>
    </body>
</html>
   