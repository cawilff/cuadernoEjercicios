<html>
    <head></head>
    <title>Tabla condicional</title>
    <body>
        <?php
        echo"<h1>Tabla condicional 1</h1>";
        
        function muestra($valor){
            if($valor<0.5)
            {
                $color="red";
            }else{
                $color="black";
            }
            echo"<td><font color='$color'>".$valor."</font></td>\n";
            
        }
        ?>
        <table border="1">
       
        <?php
        #echo"<table border=1>";
            
            for($x=0;$x<20;$x++)
            {
                echo"<tr>";
             muestra($x);
             echo"$x";
             muestra(sin($x));
             muestra(cos($x));
             echo"</tr>";
            }
       
        echo"$x";
        ?>
       <!-- </table>-->
        </table>
    </body>
    
</html>