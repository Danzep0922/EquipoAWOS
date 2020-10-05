<?php
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
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
                <a href="menu.html" class="btn btn-light btn-sm float-right"><i class="fa fa-reply"></i> regresar</a>
                <i class="fa fa-hand-holding-usd"></i>Ventas
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:20%;" scope="col">Nombre Cliente</th>
                            <th style="width:16%;" scope="col">Estado</th>
                            <th style="width:16%;" scope="col">Municipio</th>
                            <th style="width:16%;" scope="col">Tipo de Inmueble</th>
                            <th style="width:16%;" scope="col">Costo del Inmueble</th>
                            <th style="width:16%;" scope="col">Forma de Pago</th>
                            <th style="width:100%;" scope="col">
                                <a href="ventas_formulario.php" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = 'select idventa, costo_de_inmueble, forma_de_pago, nombre_vendedor, estado, municipio, tipo_inmueble, costo_de_inmueble, forma_de_pago from ventas order by nombre_vendedor asc';
                        foreach ($conexion->query($sql) as $registro) {
                            $registro['nombre_vendedor'] = htmlentities($registro['nombre_vendedor']);
                            $registro['estado'] = htmlentities($registro['estado']);
                            $registro['municipio'] = htmlentities($registro['municipio']);
                            $registro['tipo_inmueble'] = htmlentities($registro['tipo_inmueble']);
                            $registro['costo_de_inmueble'] = htmlentities($registro['costo_de_inmueble']);
                            $registro['forma_de_pago'] = htmlentities($registro['forma_de_pago']);
                              echo <<<fin

                            <tr>
                                <td>{$registro['nombre_vendedor']}</td>
                                <td>{$registro['estado']}</td>
                                <td>{$registro['municipio']}</td>
                                <td>{$registro['tipo_inmueble']}</td>
                                <td>{$registro['costo_de_inmueble']}</td>
                                <td>{$registro['forma_de_pago']}</td>
                                
                                <td>
                                    <a href="ventas_editar.php?idventa={$registro['idventa']}" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
fin;
                        }
                        ?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>