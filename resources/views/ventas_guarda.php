<?php
if (
    !isset($_POST['nombre_vendedor']) || empty($_POST['nombre_vendedor'])
    || !isset($_POST['estado']) || empty($_POST['estado'])
    || !isset($_POST['municipio']) || empty($_POST['municipio'])
    || !isset($_POST['tipo_inmueble']) || empty($_POST['tipo_inmueble']) || !in_array($_POST['tipo_inmueble'], ['Casas', 'Departamentos', 'Oficinas', 'Terrenos'])
    || !isset($_POST['costo_de_inmueble']) || empty($_POST['costo_de_inmueble'])
    || !isset($_POST['forma_de_pago']) || empty($_POST['forma_de_pago'])
    ) {
    header('Location: ventas_formulario.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into ventas set
nombre_vendedor = :nombre_vendedor
, estado = :estado
, municipio= :municipio
, tipo_inmueble = :tipo_inmueble
, costo_de_inmueble = :costo_de_inmueble
, forma_de_pago = :forma_de_pago

fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre_vendedor' => $_POST['nombre_vendedor']
    , ':estado' => $_POST['estado']
    , ':municipio' => $_POST['municipio']
    , ':tipo_inmueble' => $_POST['tipo_inmueble']
    , ':costo_de_inmueble' => $_POST['costo_de_inmueble']
    , ':forma_de_pago' => $_POST['forma_de_pago']
   ]);
header('Location: ventas.php?info=Venta creada exitosamente: ' . $_POST['nombre_vendedor']);
?>