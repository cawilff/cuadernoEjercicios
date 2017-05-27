<html>
    <head>
        <title>While B</title>
    </head>
    <body>
    <h1>While B</h1>
    
    <form  mehtod="post" action="20_whileB.php">
     ¿cuantas veces?
     <input type="text" name="num" value="">
     <input type="submit" value="Enviar">
    
    </form>
        
        <?php
        echo "antes del if";
        if(isset($_POST['num'])){
            echo 'dentro del if';
            $number=$_POST['num'];
            $counter=1;
            while($counter<$number){
                echo "<b>$counter</b>.-Los bucles son fáciles</br>\n";
                $counter++;
            }
            echo"Se acabó";
        }
    
    ?>
    </body>
</html>