<?php
require_once './checa_sesion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienveni@</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php readfile('./menu.html'); ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Bienvenido</h1><i class="check-double"></i>
  <p class="lead">"Alguna gente busca un hermoso lugar; otros hacen de un lugar, algo hermoso."</p>
</div>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/casa1.jpg" class="d-block w-100" alt="100">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/casa4.jpg" class="d-block w-100" alt="100">
    </div>
    <div class="carousel-item">
      <img src="img/casa5.jpg" class="d-block w-100" alt="100">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>