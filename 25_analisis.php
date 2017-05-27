<html>
<head>
<title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
</head>
<body>
<h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO</h1><br>
<br>
<h1>analisis de formularios (analisis.php)</h1>
<?php
$gender=$_POST['gender'];
if($gender==0){
    echo "Hola Sr.";
}else{
    echo "Hola Sra.";
}
echo " <b>{$_POST['lastname']}</b>, encantado de saludarte";
?>
</body>
</html>