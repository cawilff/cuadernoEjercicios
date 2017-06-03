
<html>
    <head>
        <title>Práctica 10 - Respuesta</title>
    </head>
    <body>
    <center>
        <h1>Práctica 10 - Respuesta</h1>
<?php
        $nombre=$_POST['nombre'];
        $edad=$_POST['edad'];
        if($edad>=18){
    echo "<h3> $nombre Usted es mayor de edad, con $edad años</h3>";
        }
        else{
      echo "<h3> $nombre Usted es menor de edad, con $edad años</h3>";      
}
?></center>
    </body>
</html>