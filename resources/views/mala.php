<?php
require_once './conexion.php';
$sql = 'select idmunicipio, municipio from municipios where idestado = :idestado order by municipio asc';
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':idestado' => $_REQUEST['idestado']]);
echo '<option value="">Selecciona</option>';
foreach ($sentencia->fetchAll() as $registro) {
    echo <<<fin

<option value="{$registro['idmunicipio']}">{$registro['municipio']}</option>
fin;
}
?>