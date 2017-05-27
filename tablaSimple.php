<html>
    <head>
        <title>Tabla simple</title>
    </head>
    
    <body>
        <h1>Esta una tabla simple</h1>
        <form method="post" action="tablaSimple.php">
            <input type="submit" value="Dibujar">   
        </form>
        <table border="2">
       <?php
       
       $al=  rand(10, 30);
       
       echo "valor aleatorio: $al";
       $var=1;
       for($i=0;$i<$al;$i++){
           echo"<tr>";
           for($j=0;$j<$al;$j++){
          
          echo "<td>$var</td>"  ;
          $var++;
           }
           echo "</tr>";
   
       }
      
       ?>
    </body>
</html>