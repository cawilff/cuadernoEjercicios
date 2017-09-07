<?php

/* 
 * PRACTICA 14 – Formulario (control textarea)
Confeccionar una pagina que muestre un contrato dentro de un textarea, disponer puntos suspensivos
donde el operador debe ingresar un texto. La pagina que procesa el formulario solo debe mostrar el
contrato con las modificaciones que hizo el operador.
 */
$ciudad=$_POST['ciudad'];
$empresa=$_POST['empresa'];
$jefe=$_POST['senior'];
$calle=$_POST['calle'];
$usted=$_POST['usted'];
$domicilio=$_POST['domicilio'];

?>
<html>
    <head>
        <title>Práctica 14 -  respuesta</title>
        
    </head>
    <body>
    <center>
        <h1>Contrato con sus datos personales</h1>
        <p align='center'>
            En la ciudad de <?php echo"$ciudad";?>, se acuerda entre la Empresa <?php echo"$empresa ";?>representada por el Sr. <?php echo"$jefe";?> en su carácter
de Apoderado, con domicilio en la calle <?php echo"$calle";?> y el Sr. <?php echo"$usted";?>, futuro empleado con domicilio en <?php echo"$domicilio";?>,
celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93,
94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </p>
        
    </center>
    </body>
</html>
