<html>
    <head>
        <title>Tabla condicional 2</title>
        
    </head>
    <body>
        <h1>Tabla condicional 2</h1>
        <?php
        function muestra($valor,$renglon)
        {
            if($renglon%2)
            {
                $fondo="#eeeeee";
            }else{
                $fondo="#dddddd";
            }
            if($valor<0.5)
            {
                $color="red";
            }else{
                $color="blue";
            }
            echo"<td bgcolo=$fondo><font color=$color>$valor</font></td>\n";
            
        }
        echo"<table border='1'>";
            $renglon=0;
            for($x=0;$x<=2;$x+=0.01)
            {
                echo "<tr>";
                muestra($x,$renglon);
                muestra(sin($x),$renglon);
                muestra(cos($x),$renglon);
                echo"</tr>";
             $renglon++;   
            }
        
        ?>
        <table border="1">
        <?php
        /*    $renglon=0;
            for($x=0;$x<=2;$x+=0.01)
            {
                echo "<tr>";
                muestra($x,$renglon);
                muestra(sin($x),$renglon);
                muestra(cos($x),$renglon);
                echo"</tr>";
             $renglon++;   
            }
        
         */ ?>
         
        </table>
    </body>
</html>