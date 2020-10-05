<?php
require_once './conexion.php';
require_once './checa_sesion.php'
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v8.0" nonce="Cbznk75p"></script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php
    readfile('./menu.html');
    ?>
  <section class="form-register">
    <center><h2>Visita Nuestras Redes Sociales</h2> </center>
    <center> <a href="https://www.facebook.com/SDI-HOUSE-104446541359828/"><img src="img/facebook.png" alt="facebook" class="img-rounded" width="100" height="100"></a><h3>FACEBOOK</h3></center>
    <center> <a href="https://www.instagram.com/sdi_124/"><img src="img/instagram.png" alt="instagram" class="img-rounded" width="100" height="100"></a><h3>INSTAGRAM</h3></center>
    <center><img src="img/correo.png" alt="correo" class="img-rounded" width="100" height="100"></a><h3>sdibienes12@gmail.com</h3></center>
    </div>
  </section>
  <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>