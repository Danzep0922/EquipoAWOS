<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['inmueble']) || empty($_POST['inmueble'])
    || !isset($_POST['fecha']) || empty($_POST['fecha'])
    || !isset($_POST['precio']) || empty($_POST['precio'])
    ) {
    header('Location: comprar.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into cliente set
nombre = :nombre
, primer_apellido = :primer_apellido
, inmueble = :inmueble
, fecha = :fecha
, precio = :precio
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':inmueble' => $_POST['inmueble']
    , ':fecha' => $_POST['fecha']
    , ':precio' => $_POST['precio']
]);
 header('Location: bienvenida.php?info=ompra creado exitosamente: ' . $_POST['nombre']);
?>