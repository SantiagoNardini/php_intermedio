<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Agregar registro</title>
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
    <h1 class="text-center">Agregar un registro en la base de datos</h1>
    <form action="accion_registro.php" method="post" class="container-md mt-4">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="name" aria-describedby="emailHelp" placeholder="Nombre">
  </div>

  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
  </div>

  <div class="form-group">
    <label for="fecha_nacimiento">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento">
  </div>

  <div class="form-group">
    <label for="dni">DNI</label>
    <input type="number" class="form-control" name="dni" id="dni" placeholder="DNI">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>

  <button type="submit" value="Register" class="btn btn-success">Registrar usuario</button>
  <button type="button" class="btn btn-primary" onclick="location.href='../index.php'">Volver a usuarios</button>
  
</form>
</body>
</html>