<?php
if (!isset($_GET['idventa']) || !is_numeric($_GET['idventa'])) {
    header('Location: clientes.php?info=Selecciona cliente a editar');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    idventa
    , nombre_vendedor
    , estado
    , municipio
    , tipo_inmueble
    , costo_de_inmueble
    , forma_de_pago
from
    ventas
where
    idventa = :idventa
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':idventa' => $_GET['idventa']]);
$usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false === $cliente) {
    header('Location: ventas.php?info=No se encontró el cliente');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php
    readfile('./menu.html');
    ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <a href="ventas.php" class="btn btn-light btn-sm float-right"><i class="fa fa-chevron-circle-left"></i> regresar</a>
                <i class="fa fa-user"></i> Editar venta
            </div>
            <div class="card-body">
                <form action="ventas_actualiza.php" method="post">
                    <div class="form-group">
                        <label for="nombre_vendedor">Nombre Cliente</label>
                        <input type="text" class="form-control form-control-sm" id="nombre_vendedor" name="nombre_vendedor" value="<?php echo htmlentities($ventas['nombre_vendedor']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control form-control-sm" id="estado" name="estado" value="<?php echo htmlentities($ventas['estado']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control form-control-sm" id="municipio" name="municipio" value="<?php echo htmlentities($ventas['municipio']);?>" required> 
                    </div>
                    <div class="form-group">
                        <label for="tipo_inmueble1">Tipo Inmueble</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble1" value="Casas" ><?php echo 'Casas' == $ventas['tipo_inmueble1'] ? 'checked' : '';?>>
                            <label class="form-check-label" for="tipo_inmueble1">Casas</label>
                            </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble2" value="Departamentos"><?php echo 'Departamentos' == $ventas['tipo_inmueble2'] ? 'checked' : '';?>>
                            <label class="form-check-label" for="tipo_inmueble2">Departamentos</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble3" value="Oficinas" ><?php echo 'Oficinas' == $ventas['tipo_inmueble3'] ? 'checked' : '';?>>
                            <label class="form-check-label" for="tipo_inmueble3">Oficinas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble4" value="Terrrenos"><?php echo 'Terrrenos' == $ventas['tipo_inmueble4'] ? 'checked' : '';?>>
                            <label class="form-check-label" for="tipo_inmueble4">Terrrenos</label>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="costo_de_inmueble">Costo del Inmueble</label>
                        <input type="text" class="form-control form-control-sm" id="costo_de_inmueble" name="costo_de_inmueble"<?php echo htmlentities($ventas['costo_de_inmueble']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="forma_de_pago">Forma de Pago</label>
                        <input type="text" class="form-control form-control-sm" id="forma_de_pago" name="forma_de_pago"<?php echo htmlentities($ventas['forma_de_pago']);?>" required>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id" value="<?php echo $ventas['idventa'];?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>