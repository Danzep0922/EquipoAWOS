<?php
require_once './conexion.php';
require_once './checa_sesion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    readfile('./menu.html');
    ?>
  <section class="form-register">
    <center><h4>Registra tu Inmueble</h4></center>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="primer_apellido" id="primer_apellido" placeholder="Ingrese su Primer Apellido">
    <input class="controls" type="text" name="descripcioninmueble" id="descripcioninmueble" placeholder="Tipo de inmueble">
    <input class="controls" type="text" name="estado" id="estado" placeholder="Estado">
    <input class="controls" type="text" name="municipio" id="municipio" placeholder="Municipio">
    <input class="controls" type="text" name="fecha" id="fecha" placeholder="Precio">
    <input class="controls" type="text" name="forma_de_pago" id="forma_de_pago" placeholder="Forma de Pago">
    <input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
    <a href="#"><input class="botons" type="submit" value="Registrar"></a>
  </section>

</body>
</html>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>