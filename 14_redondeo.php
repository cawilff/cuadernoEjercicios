<html>
    <!ejemplo de redondeo>
    <head>
        <title>Ejemplo de redondeo</title>
    </head>
    <body>
        <h1>Cálculos, redondeo y formato</h1>
    <?php
    //primero declaramos las variables.
    $precioneto=101.98;
    $iva=0.196;
    $resultado=$precioneto*$iva;
    
    echo "El precio es de ";
    echo $precioneto;
    
    echo "y el IVA el";
    echo $iva;
    
    echo "Resultado";
    echo $resultado;
    
    echo "Resultado redondeado";
    echo round($resultado,2);
    
    
    ?>
    
    </body>
    
</html>