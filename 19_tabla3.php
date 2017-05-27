<html>
    <head>
        <title>Tabla 3</title>
    </head>
    <body>
        <h1>Tabla condicional 3 variables globales</h1>
    <?php
        /* Crearemos una tabla de valores de seno y coseno de 0 a 2
        en incrementos de 0.01. Los valores negativos que resulten los queremos
        mostrar en rojo, y los valores positivos en azul */
        /* Variacion. Un color diferente cada fila que se imprima
        Para que funcione bien, necesitamos que la variable renglon se tome
        "desde afuera" y no de manera local dentro de la funcion*/
    
        function muestra($valor){
            global $nrenglon;
            if($nrenglon%2)
            {
                $fondo="#ffff00";
            }else{
                $fondo="#ffffff";
            }
            if($valor<0.5)
            {
                $color="red";
            }else{
                $color="blue";
            }
            echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
        }
        echo"<table border='1'>";
        
        $nrenglon=0;
        for($x=0;$x<=2;$x+=.05)
        {
            echo"<tr>";
            muestra($x);
            muestra(sin($x));
            muestra(cos($x));
            echo"</tr>";
        }
    ?>
    </body>
</html>