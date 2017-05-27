<?php 
/* 12_logicos.php
Programa de ejemplo de operadores logicos
Por: Lic. Sergio Hugo Sanchez O.
Para: Universidad Matamoros
17, Mayo, 2009 */
?>

<html>
    <head>
        <title>Ejemplo de operadores lógicos</title>
    </head>
    <body>
        <h1>Ejemplo de operadores lógicos.</h1>
        <p>
            <?php
            $a=8;
            $b=3;
            $c=3;
            
            echo ($a==$b)&&($c>$b),"</br>";
            echo ($a==$b)||($b==$c),"</br>";
            echo !($b<=$c)*$b,"</br>";
            
            ?>
        </p>
    </body>