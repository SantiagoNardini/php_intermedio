<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="home" href="index.php">INICIO</a>
                    <a class="home" href="php/comentario.php">COMENTARIOS</a>
                    <a class="home" href="php/ver_comentario.php">VER COMENTARIO</a>
                </li>
            </ul>
        </nav>
    </header>

    <main> 

        <?php 
        
        $conexion = mysqli_connect('localhost', 'root', '', 'nardini_santiago') or exit("No se pudo conectar a la base de datos");
        $result = mysqli_query($conexion, "SELECT * from usuarios");
        
        ?>
        <table class="table table-striped">
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">DNI</th>
        <th scope="col">Fecha Nacimiento</th>
        </tr>
        <?php
        //mostramos los registros con un bucle while
        while ($row = mysqli_fetch_array($result)) {
        echo '<tr><td>' . $row["nombre"] . '</td>';
        echo '<td>' . $row["apellido"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td>' . $row["dni"] . '</td>';
        echo '<td>' . $row["fecha_nacimiento"] . '</td></tr>';
        }
        mysqli_free_result($result)
        ?>
        </table>

        <button type="button" class="btn btn-success" onclick="location.href='php/agregar_registro.php'">Añadir un registro</button>
        <button type="button" class="btn btn-danger" onclick="location.href='php/borrar_registro.php'">Borrar un registro</button>

    </main>
    
</body>
</html>