<?php
//conexión con la base y selección de la base de datos
$conexion = mysqli_connect("localhost","root","","nardini_santiago");
//traigo los datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST['password'];
$dni = $_POST['dni'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_rol = 2;

//ejecución de la sentencia sql
mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, password, dni, fecha_nacimiento, id_rol) VALUES ('$nombre', '$apellido', '$email', '$password', '$dni', '$fecha_nacimiento', ' $id_rol')");
header("Location: ../index.php");
?>