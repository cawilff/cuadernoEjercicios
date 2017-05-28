<html>
    <head>
        <title>Un libro de visitas muy sencillo</title>
        <meta http-equiv="content-type" content="text/html" charset="iso-8859-1">
    </head>
    <body>
        <h1>Libro de visitas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Tu comentario:</br>
            <textarea cols="55" rows="4" name="comment"></textarea><br>
            Tu nombre:
            <input type="text" name="name"><br>
            Tu e-mail:
            <input type="text" name="email"><br>
            <input type="submit" vlaue="publica">
        
        </form>
        <h3>Mostrar todos los comentarios</h3>
        <?php 
        //Guarda el nombre del archivo en la variable.
        $file="guestbook.txt";
        //variable comment ¿definida?
        //nombre e e-mail no estan vacios?
        //if isset($_POST['comment']) && $_POST['name'] ! = "" && $_POST['email'] != "" {
        if (isset($_POST['comment']) && isset($_POST['name']) != "" && $_POST['email'] != "") {
            $comment=$_POST['comment'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            
            //El archivo se abre para escritura lectura.
            $fp=fopen($file,"r+");
            //lee todos los datos y almacenar en $old.
            $old=fread($fp,  filesize($file));
            //se crea el vinculo de e-mail.
            $email="<a href=\mailto:$email\">$email</a>";
            //se incluye la fecha y se le da formato.
            $dateOfEntry=date("y-n-j");
                //ocultar caracteres html, eliminar slashes, mantener saltos de linea.
                $comment =htmlspecialchars($comment);
                $comment=stripslashes(nl2br($comment));
                $comment=stripslashes($comment);
             //montar la entrada(entry) del libro de visitas
             $entry="<p><b>$name</b>($email) wrote on <i>$dateOfEntry</i>;<br> $comment </p>\n";
             //el cursor invisible salta al principio.
             rewind($fp);
             //escribir en la nueva entrada antes de las antiguas en el archivo:
             fputs($fp," $entry\n $old");
             //cerrar el archivo.
             fclose($fp);
                     
        }
        //mostrar el archivo completo.
        readfile($file);
        ?>
        
    </body>
</html>