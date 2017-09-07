<html>
    <head>
        <title>El gran agujero de seguridad</title>
    </head>
    <body>
        <h2>Agujero de seguridad en register_global=On</h2>
        <form action="33_seguridad.php" method="post">
            contraseña:<input type ="password" name="pass">
            <input type="submit" value="Enviar">
        </form>
        
        <?php
        $pass=$_POST['pass'];
        if($pass=="abc_xyz_123"){
            $login=true;
        }
        if($login){
            echo "<p>Aqui empieza la alarma secreta</p>";
        }
        ?>
    </body>
</html>