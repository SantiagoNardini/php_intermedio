<?php
//pasamos los datos del formulario
$dni = $_POST["dni"];
//conexión con la base y seleccion de la base de datos
$conexion = mysqli_connect("localhost","root","","nardini_santiago");
//creamos la sentencia sql y la ejecutamos
$ssql="DELETE FROM usuarios WHERE dni='$dni'";
mysqli_query($conexion,$ssql);
//cerramos la conexión
mysqli_close($conexion);
//redireccionamos
header("Location: ../index.php");
?>