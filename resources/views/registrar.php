<?php
require_once './conexion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SDI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </nav>
    <section class="form-register">
    <center><h4>Crea tu registro</h4></center>
    <form action="registrar_guarda.php" method="post">
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
    <input class="controls" type="text" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido" required>
    <input class="controls" type="text" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido" required>
    <input class="controls" type="tel" name="numero_celular" id="numero_celular" placeholder="Número Celular" required>
    <input class="controls" type="email" name="correo_electronico" id="correo_electronico" placeholder="Correo Electrónico" required>
    <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Contraseña"  required>
    <input class="controls" type="password" name="contrasena_confirma" id="contrasena_confirma" placeholder="Contraseña confirma"  required>
    <input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
    <input class="botons" type="submit" value="Registrar">
    </form>
  </section> 
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>