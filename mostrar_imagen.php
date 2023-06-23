

<?php

include 'conexion.php';

$conexion=mysqli_connect($db_host,$db_usuario,$db_clave,$db_nombre);

$consulta="SELECT * FROM anuncios";

$resultado=mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_array($resultado)){

$anuncio_id[]=$fila['id'];
$anuncio_nombre[]=$fila['nombre'];
$anuncio_img[]=$fila['imagen'];


};


$img= base64_encode($anuncio_img[0]);
$img2=base64_encode($anuncio_img[1]);
$img3=base64_encode($anuncio_img[2]);

mysqli_close($conexion);

 
?>
