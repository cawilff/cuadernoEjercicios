<?php

/* 
Definir un vector con los nombres de los dias de la semana. Luego imprimir el primero y el ultimo
elemento del vector.
 *  */
?>

<html>
    <head>
        <title>Practica 15</title>
    </head>
    <body>
        <h1>Arreglo de dias de la semana</h1>
        <?php 
        $dias[0]=('domingo');
        $dias[1]=('lunes');
        $dias[2]=('martes');
        $dias[3]=('miercoles');
        $dias[4]=('jueves');
        $dias[5]=('viernes');
        $dias[6]=('sabado');
        echo" Hoy es $dias[4]";
        echo '<br>';
        echo'<br>';
//otra manera
        
        $dias2[]=array('domingo','lunes','martes','miercoles','jueves','viernes','sabado');
        $max=  sizeof($dias2);
        for($i=0;$i<$max;$i++){
            echo "Dia: $dias2[$i]\n";
        }
        
        
        ?>
    </body>
</html>