
<?php

include 'conexion.php';

$conexion=mysqli_connect($db_host,$db_usuario,$db_clave,$db_nombre);

$consulta="SELECT mensaje FROM anuncio_texto";

$resultado=mysqli_query($conexion,$consulta);

$fila=mysqli_fetch_row($resultado);

mysqli_close($conexion);

?>


