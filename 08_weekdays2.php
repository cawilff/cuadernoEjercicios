<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
        <h1>Días de la semana al azar</h1>
        <p>
            <?php
            /*
             * Generacion de arreglo de dias de la semana
             * y su posterior acceso aleatorio.
             */
            $dia[0]="Domingo";
            $dia[1]="Lunes";
            $dia[2]="Martes";
            $dia[3]="Miercoles";
            $dia[4]="Jueves";
            $dia[5]="Viernes";
            $dia[6]="Sábado";
            
            //funcion para generar numeros aleatorios
            $posicion=rand(0,6);
            echo"Hoy es $dia[$posicion]";
            
            ?>
        </p>
    </body>
</html>