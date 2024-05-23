<?php 
$fecha_actual = date('d/m/Y');
$texto = "<br/>Nombre: " . $_POST['nombre'] . "<p> Apellido: " . $_POST['apellido'] . "<p> Comentario: " . $_POST['comentario'] . "</p>" . "Fecha comentario: " . $fecha_actual ."<br>";

$archivo = fopen('comentarios.txt', 'a');
fwrite($archivo, $texto);
echo "<p> Comentario guardado correctamente </p>";
header("Location: ver_comentario.php");

?>