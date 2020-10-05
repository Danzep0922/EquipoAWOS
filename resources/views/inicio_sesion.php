<?php
if (
    !isset($_POST['correo_electronico']) 
    || empty($_POST['correo_electronico']) 
    || !filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)
    || !isset($_POST['contrasena']) 
    || empty($_POST['contrasena'])
    ) {
    header('Location: index.php?info=Escribe tu correo y contraseña');
    exit;
}
require_once './conexion.php';
$sql = 'SELECT idcliente, nombre, contrasena FROM clientes WHERE correo_electronico = :correo_electronico LIMIT 1';
$sentencia = $conexion-> prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia-> execute([':correo_electronico' => $_POST['correo_electronico']]);
$usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
// ¿Usuario existente?
if (false == $usuario) {
    header('Location: index.php?info=Cliente no encontrado: ' . $_POST['correo_electronico']);
    exit;
}
//¿Contraseña coincide?
if (!password_verify ($_POST['contrasena'] , $usuario['contrasena'])) {
   header('location:index.php?info=Cliente o contraseña incorrectos');
    exit;
  }
// iniciamos session  y guardamos los valores para posterior uso
session_start();
$_SESSION['idcliente'] = $usuario['idcliente'];
$_SESSION['nombre'] = $usuario['nombre'];
header('Location: bienvenida.php');
?>