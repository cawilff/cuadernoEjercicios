<?phpsetcookie("check",1);
if(isset($_POST['submit'])){
    setcookie("vote",1);
}
?>
<html>
    <head>
        <title>31 Encuesta de opinion</title>
        <meta http-equiv="content-type"content="text/html" charset="iso-8859-1">
        
    </head>
    <body>
        <h1>Encuesta</h1>
        <h3>¿Qué opinas de este curso de PHP?</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="radio" name="reply" value="0">
        Excelente, he aprendido mucho.<br>
        <input type="radio" name="reply" value="1">
        Mas o menos, es muy complicado.<br>
        <input type="radio" name="reply" value="2">
        ¡Bah!, para qué quiero aprender PHP.<br><br>
        <?php
        if(empty($_POST['submit'])&&empty($_COOKIE['voted'])){
            //mostrar el boton submit solo si el formulario todavia
            //no se ha enviado y el usuario no ha votado.
            ?>
        <input name="submit" type="submit" value="vota!">
        <?php
            
        }else{
            echo "<p>Gracias por tu voto.</p>\n";
            //¿formulario enviado?, ¿cookies activas?, ¿pero todavia no se ha votado?
            if(isset($_POST['reply'])&&isset($_COOKIE['check'])&&empty($_COOKIE['voted'])){
                //guardar nombre de archivo en la variable.
                $file="results.txt";
                $fp=fopen($file,"r+");
                $vote=  fread($fp,  filesize($file));
               //descomponer la cadena del archivo en array con coma como separador.
                $arr_vote=explode(",",$vote);//explode convierte la cadena en arreglo.
                //¿que valor se ha seleccionadoen el formulario?
                
                //el recuento aumenta en 1.
                $reply=$_POST['reply'];
                $arr_vote['reply']++;
                //volver a montar la cadena.
                
                $vote=  implode(",", $arr_vote);//implode vincula elementos del array a string.
                rewind($fp);
                //escribir nueva cadena en el archivo.
                fputs($fp, $vote);
                fclose($fp);
                
            }
        }
        
        ?>
        </form>
        <p>[ <a href="results.txt" target="_blank">ver resultados de la encuesta.</a>]</p>
    </body>
</html>