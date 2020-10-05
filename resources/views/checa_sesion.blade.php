<?php
session_start();
if (!isset($_SESSION['idcliente']) || empty($_SESSION['idcliente'])) {
  header('Location: index.php?info=Escribe tu correo y contraseña');
    exit;
}
?>