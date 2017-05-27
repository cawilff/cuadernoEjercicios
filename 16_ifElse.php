<html>
    <head>
        <title>Ejercicio if else</title>
    </head>
    
    <body>
        <?php
        $dia=date("d");
        $fecha=  date("y/m/d");
        if($dia<=30){
            echo"Sitio activo";
        }else{
            echo" Sitio fuera de servicio";
            
        }
        echo"</br>";
        echo "$dia";
        echo"</br>";
        echo "Fecha completa";
        echo " $fecha";
        ?>
    </body>
</html>