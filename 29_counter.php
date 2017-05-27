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
            echo "<b>$counter</b>";
            $counter++;
            rewind($fp);
            fclose($fp);
            
            ?>
    </body>
</html>