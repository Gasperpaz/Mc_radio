<?php

$nombre=$_POST["nombre"];
$mensaje=$_POST["texto"];
$fecha=$_POST["fecha"];



include 'conexion.php';

$conexion=mysqli_connect($db_host,$db_usuario,$db_clave,$db_nombre);

$consulta1="INSERT INTO mensajes (nombre,mensaje,fecha) VALUES ('$nombre','$mensaje','$fecha')";




$resultado=mysqli_query($conexion,$consulta1);
if($resultado){
echo "Mensaje enviado con exito";
}else{
echo "error al enviar el mensaje";
}
mysqli_close($conexion);



?>
