<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['numero_celular']) || empty($_POST['numero_celular'])
    || !isset($_POST['correo_electronico']) || empty($_POST['correo_electronico']) || !filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)
    || !isset($_POST['contrasena']) || empty($_POST['contrasena']) || strlen($_POST['contrasena']) < 8
    || $_POST['contrasena'] != $_POST['contrasena_confirma']
    ) {
    header('Location: clientes_formulario.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into clientes set
nombre = :nombre
, primer_apellido = :primer_apellido
, segundo_apellido = :segundo_apellido
, numero_celular = :numero_celular
, correo_electronico = :correo_electronico
, contrasena = :contrasena
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':numero_celular' => $_POST['numero_celular']
    , ':correo_electronico' => $_POST['correo_electronico']
    , ':contrasena' => password_hash($_POST['contrasena'], PASSWORD_BCRYPT, ['cost' => 12])
]);
header('Location: clientes.php?info=Cliente creado exitosamente: ' . $_POST['nombre']);
?>