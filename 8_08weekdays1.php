<html>
    <head>
        <meta>
        <title>Arrays metodo largo</title>
    </head>
    <body>
        <h1>Introduccion a los arrglos </h1>
        <p>
            <?php
            $dia[0]="domingo";
            $dia[1]="lunes";
            $dia[2]="martes";
            $dia[3]="miercoles";
            $dia[4]="jueves";
            $dia[5]="viernes";
            $dia[6]="sabado";
             
           
             $array_length=count($dia);
          for ($i = 0; $i <$array_length-1; $i++) {
               echo"dia ".$dia[$i]."</br>";
               
          }
          echo"<h2> Llenado de un arreglo</h2>";
          
          
          $arreglo2[10];
          for($i=0;$i<10;$i++){
              $arreglo2[$i]=$i*10;
              echo"Arrego: ".$arreglo2[$i]."</br>";
          }
          
            
            ?>
        </p>
    </body>
</html>