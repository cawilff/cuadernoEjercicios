<?php
/*
 * Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, luego mostrar en
*   otra pagina si es mayor de edad (si la edad es mayor o igual a 18).
 */
?>
<html>
    <head>
        <title>Práctica 10</title>
    </head>
    <body>
        <center>
        <h1>Práctica 10</h1>
    
        <form action='practica10_respuesta.php' method="post">
            Nombre: <input type="text" name='nombre' placeholder="Nombre">
            <br><br>
            Edad: <input type="text" name='edad' placeholder="Edad">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </center>
    </body>
</html>