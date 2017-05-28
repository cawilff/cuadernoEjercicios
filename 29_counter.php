<html>
    <head>
        <title>Contador sencillo</title>
    </head>
    <body>
        <h1>Contador sencillo</h1>
        <p>cantidad de visitas</p>
        <b>
            <?php
            //para el contador de visitas necesitaremos un archivo de texto externo
            //donde almacenaremos las visitas
            //Aqui se veran las funciones para trabajar con archivos, en este
            //caso abrir, leer, grabar y cerrar.
            //El contador simplemente se va sumando
            //
            $fp=fopen("counter.txt","r+");
            $counter=fgets($fp,7);
            if($counter!=""){
            echo "<b>$counter</b>";
            $counter++;
            rewind($fp);
            fputs($fp,$counter);
            
            fclose($fp);
            }
            else{//Agregué el if por si no hay datos en el archivo txt.
              $counter=0;
              rewind($fp);
              fputs($fp,$counter);
              fclose($fp);
              header('Location:29_counter.php');
            }
            ?>
    </body>
</html>