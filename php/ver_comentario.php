<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ver Comentario</title>
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

<?php
    $archivo = fopen("../comentarios.txt", "r");
    $size = filesize("../comentarios.txt");
    $contenido = fread($archivo, $size);
    echo'<div class="container-md mt-4">'.$contenido.'</div>';
    fclose($archivo);
?>
    
</body>
</html>