<?php
require_once './checa_sesion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php
    readfile('./menu.html');
    ?>
    <img src="img/sdihouse.png"width="250" alt="img_conference" class="rounded float-left mr-4"></td><div class="jumbotron text-center">
     <h1>SDI House</h1>
      <p>¿Por cuánto tiempo me quedo con una propiedad? Mi preferencia: para siempre</p> 
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Casas</h3>
         <img src="img/1.jpg"width="200" alt="img_conference" class="rounded float-left mr-4"></td>
         <a href="casas.php"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-arrow-alt-circle-left"></i> Observar</button></a>
        </div>
        <div class="col-sm-4">
          <h3>Hoteles</h3>
          <img src="img/2.jpg"width="200" alt="img_conference" class="rounded float-left mr-4"></td>
          <a href="hoteles.php"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-arrow-alt-circle-left"></i> Observar</button></a>
        </div>
        <div class="col-sm-4">
          <h3>Oficinas</h3>  
          <img src="img/3.jpg"width="200" alt="img_conference" class="rounded float-left mr-4"></td>  
          <a href="oficinas.php"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-arrow-alt-circle-left"></i> Observar</button></a>
        </div>
      </div>
        <div class="row">
          <div class="col-sm-4">
            <h3>Terrenos Si Construcciones</h3>
            <img src="img/4.jpg"width="200" alt="img_conference" class="rounded float-left mr-4"></td>
            <a href="terrenos.php"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-arrow-alt-circle-left"></i> Observar</button></a>
          </div>
          <div class="col-sm-4">
            <h3>Promociones</h3>  
            <img src="img/5.jpg"width="200" alt="img_conference" class="rounded float-left mr-4"></td>  
            <a href="promociones.php"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-arrow-alt-circle-left"></i> Observar</button></a>    
          </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>