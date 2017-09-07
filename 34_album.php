<html>
    <head>
        <title>Mi album de fotografias</title>
    </head>
    <body>
        <h1>Mi album de fotos en linea.</h1>
        <h3>Cargar archivos</h3>
        <form action='34_album.php' method="post" enctype="multipart/form-data">
            <input type='file' name='archivo'>
            <input type="submit" name='submit' value="Cargar archivo"
            
        </form>
        <?php
        $ruta="img/";//indicar ruta
        if(isset($_FILES['archivo'])&&$_FILES['archivo']['size']>0){
            $tamanyomax=200000;//indicar tamaño en bytes
            $nombretemp=$_FILES['archivo']['tmp_name'];
            $nombrearchivo=$_FILES['archivo']['name'];
            $tamanyoarchivo= getimagesize($nombretemp);
            if($tipoarchivo[2]==1||$tipoarchivo[2]==2){//gif o jpg
                if($tamanyoarchivo<=$tamanyomax){//archivo demasiado grande?
                    if(move_uploaded_file($nombretemp, $ruta.$nombrearchivo)){
                        echo '<p>El archivo se ha cargado</p>';
                        echo "Tamaño de archivo: <b>$tamanyoarchivo</b> bytes";
                        echo "Nombre de imagen: <b>$nombrearchivo</b><br></p>";
                        
                    }else{
                        echo "<p>No se ha podido cargar el archivo.</p>";
                    }
                } else {
echo "<p>El archivo tiene mas de <b>$tamanyomax bytes</b> y es demasiado grande.</p>";
}
} else {
echo "<p>No es un archivo GIF o JPG valido.</p>";
}
echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>;
<input type='submit' value='OK'></form>";
}
$filehandle=opendir($ruta);
while($file=  readdir($filehandle)){
    if($file!="."&&$file!=".."){
        $tamanyo=  getimagesize($ruta.$file);
echo "<p><img src='$ruta$file'$tamanyo[3]><br></p>\n";
    }
}
closedir($filehandle);//fin de lectura de archivos.
            
        
        ?>
    </body>
</html>