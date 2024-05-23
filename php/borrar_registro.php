<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>>Borrar un registro</title>
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                    <a class="home" href="../index.php">INICIO</a>
                    <a class="home" href="comentario.php">COMENTARIOS</a>
                    <a class="home" href="ver_comentario.php">VER COMENTARIO</a>
                </li>
            </ul>
        </nav>
    </header>
<h1>Eliminar un registro</h1>
<?php
//conexión con la base y selección de la base de datos
$conexion = mysqli_connect('localhost', 'id21993853_admin', 'Admin123-', 'id21993853_nardini_santiago');
?>
<form method="post" action="accion_borrar.php">
<?php
//creamos la sentencia sql y la ejecutamos
$ssql = "SELECT dni, apellido, nombre FROM usuarios ORDER BY nombre";
$result = mysqli_query($conexion, $ssql);
?>
<select name="dni">
<option value="">--Seleccione un Alumno--</option>
<?php
//mostramos los registros en forma de menú desplegable
while ($row = mysqli_fetch_array($result)) {
echo '<option value="' . $row['dni'] . '">' . $row["nombre"] . " " . $row["apellido"] . " - " . $row ["dni"] . '</option>';
}
mysqli_free_result($result);
?>
</select>
<input type="submit" value="Eliminar"  class="btn btn-danger">
<button type="button" class="btn btn-primary" onclick="location.href='../index.php'">Volver a usuarios</button>
</form>

</body>
</html>