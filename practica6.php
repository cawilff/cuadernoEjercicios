<html>
    <head>
        <title>Practica 6</title>
            
    </head>
    <body>
        <h1>Practica seis</h1>
        <p align="center">
            Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos enteros:
            $num = rand(1,100);
            En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre
            1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar ademas si es
            menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable tambien utilizamos el
            comando ECHO
        </p>
        <?php
        $num=rand(1,100);
        echo "El número generado es: </br>";
        echo "$num";
        echo "</br>";
        
        if($num==50){
            echo "Num es exactamente 50!</br>";
        }
        if($num<50){
            echo "num es menor que 50</br>";
        }else{
            echo " num es mayor que 50</br>";
        }
        ?>
        <scritp  type=text/javascript>
        funcion1(){
        
        }
        </scritp>
    <output typue="button" value="iniciar"/>
        <form>
       <div align="left">
         <input type="button" value="VOLVER ATRÁS" name="Back2" onclick="funcion1()" />
         </div>
        </form>
    </body>
</html>
    
    