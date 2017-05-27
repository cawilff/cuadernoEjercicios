<?php 
/*
 * NOTA: Uso de ciclo while para hacer una repeticion tantas veces quiera el usuario, para ello trabajamos
con un formulario externo vinculado a php para hacerlo. Mostrar la conexión y variables externas, asi
como el uso del while.
 */
?>
<html>
    <head>
        <title>
            while
        </title>
    <body>
        <h1>ciclo While</h1>
        <form method="post" action="20_while.php">
        <input type="text" name="number" value="">
        <input type="submit" value="Enviar">
        
        </form>
        <?php
        if(isset($_POST['number'])){
            $number=$_POST['number'];
            $counter=1;
            while($counter<$number){
                echo"los bucles son fáciles</br>\n";
                $counter++;
            }
            echo "se acabo\n";
        }
        ?>
    </body>
    </head>
</html>