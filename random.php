<html>
    <head>
        
    </head>
    <title></title>
    <body>
    <?php
    
    
    echo"<h1>valor generado aleatoriamente</h1>";
    for($i=0;$i<20;$i++){
        $rndm= rand(1,100);
        echo"$rndm <br/>";
    }
    echo"<h2> uso de un arreglo</h2>";
    $arr=array();
    for($j=0;$j<20;$j++){
       $arr[$j]=  rand(1, 100); 
       echo"arr[$j] = " . $arr[$j] . "<br/>";
    }
    
    
    echo"<h3> comparando valores del arreglo</h3>";
    
    $arr2=array();
    for($j=0;$j<20;$j++){
        
       $arr2[$j]=  rand(1, 100); 
       if($arr2[$j]>=18 &&$arr2[$j]<=30){
       
       echo"arr2[$j] = " . $arr2[$j] . "<br/>";
    }

    }
    
    ?>    
    </body>
    
</html>