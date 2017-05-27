<html>
    <head>
        <title>Condicional switch</title>
    </head>
    <body>
        <h1>Condicional switch</h1>
        <?php
        /*
         * declaramos una variable con un valor de muestra
         * 
         */
        $posicion="test";
        echo "La variable posicion es,$posicion";
        echo"</br>";
        switch ($posicion){
            case "arriba":              //primer condicion si es arriba
             echo "La variable tiene el valor de arriba";
                break;
            case "abajo":
                echo "La variable tiene el valor de abajo";
                break;
            
            default:
                echo "La variable contiene un valor distinto de arriba o abajo";
        }
        ?>
    </body>
</html>