<html>
    <head>
        <title>MySQL 01-Consulta a BD (Agenda)</title>
    </head>
    <body>
        <h1>Mostrar nombres de la agenda BD</h1>
        <?php
        $server="localhost";
        $username="root";
        $password="";
        $dp=mysql_connect($server, $username,$password);
        mysql_select_db("agenda",$dp);
        $sql="SELECT * FROM direcciones";
        $resultado=  mysql_query($sql);
        while($row=  mysql_fetch_assoc($resultado)){
            echo "$row[Nombre] $row[Apellido]<br>\n";
            
        }
        mysql_close($dp);
        ?>
    </body>
</html>