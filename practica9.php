<html>
    <head>
        <title>practica 9</title>
    </head>
    <body>
       <h1>Práctica 9</h1>
       <p>
            Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el numero (Ej. Si se genera el 3
            lugo mostrar en la pagina el string “tres”). Para ver si una variable es igual a cierto valor debemos
            plantear una condicion similar a:
            If ($valor==3)
            {
            //algorimo
            }
       </p>
       <?php
       $aleatorio=rand(1,5);
       $arreglo=array("uno","dos","tres","cuatro","cinco");
       echo"aleatorio = $aleatorio </br>";
       for($i=0;$i<5;$i++){
           
           if($aleatorio==$i+1){
               echo "numero: $aleatorio";
               echo  "letra: $arreglo[$i]";
           }
       }
       ?>
    </body>
    
    
        
   
</html>