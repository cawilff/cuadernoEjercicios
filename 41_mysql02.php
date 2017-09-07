<html>
    <head>
        <title>MySQL 02 - Consulta BD con tabla (Agenda)</title>
        
    </head>
    <body>
    <h1>MySQL 02 - Consulta BD con tabla (Agenda)</h1>
    <?php
    $dp=mysql_connect("localhost","root","");
    mysql_select_db("agenda",$dp);
    $sql="Select * from direcciones";
    $resultado=mysql_query($sql);
    $campos=  mysql_num_fields($resultado);
    $filas=  mysql_num_rows($resultado);
    echo "<p> cantidad de filas: $filas</p>\n";
    echo "<table border='1' cellspacing='0'>\n"; //empezar tabla
    echo "<tr>";//crear fila
    for($i=0;$i<$campos;$i++){
        $nombrecampo=mysql_field_name($resultado,$i);
        echo "<th>$nombrecampo</th>";
        
    }
    echo "</tr>\n";//cerrar fila.
    while ($row=mysql_fetch_assoc($resultado)){
        echo "<tr>";//crear fila.
        foreach($row as $key=>$value){
            echo "<td> $value&nbsp;</td>";
        }
        echo "</tr>\n";//cerrar fila.
        
    }
    echo "</table>\n";//cerrar tabla
    mysql_close($dp);
    
    ?>
    </body>
</html>