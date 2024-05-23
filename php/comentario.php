<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Comentario</title>
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

    <h1 class="text-center">Hacer comentario</h1>
    <form action="archivo_comentario.php" method="post" class="container-md mt-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
        <label for="exampleFormControlInput1" class="form-label">Comentario</label>
        <textarea name="comentario" class="form-control" placeholder="Deja un comentario"></textarea>
        </div>
        <input type="submit" value="Enviar comentario" class="btn btn-success">
    </form>
</body>
</html>