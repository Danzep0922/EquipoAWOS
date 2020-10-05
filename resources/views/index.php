<?php
require_once './conexion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SDI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </nav>
    <section class="form-register">
    <center><h4>Inicia Sesión</h4></center>
           <?php
                if (isset($_GET['info']) && !empty($_GET['info'])) {
                    $_GET['info'] = htmlentities($_GET['info']);
                    echo <<<fin

                <div class="alert alert-warning" role="alert">
                    {$_GET['info']}
                </div>
fin;
                }
                ?>
   <form action="inicio_sesion.php" method="POST">
    <input class="controls" type="email" name="correo_electronico" id="correo_electronico" placeholder="Correo Electronico" required>
    <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Contrasena"  required>
    <a href="bienvenida.php"><input class="botons" type="submit" value="Ingresar"></a>
  </form>
    <a href="registrar.php"><input class="botons" type="submit" value="Registrarse"></a>
  </section> 
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>