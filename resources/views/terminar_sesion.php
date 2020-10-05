<?php
session_start();
// Destruir todas las variables de sesión.
$_SESSION = [];
// Finalmente, destruir la sesión.
session_destroy();
header('location:index.php?info=Sesión terminada');
?>