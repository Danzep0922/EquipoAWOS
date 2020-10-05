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
                <a href="ventas.php" class="btn btn-light btn-sm float-right"><i class="fa fa-reply"></i> regresar</a>
                <i class="fa fa-dollar-sign"></i> Registro para Ventas
            </div>
            <div class="card-body">
                <form action="ventas_guarda.php" method="post">
                    <div class="form-group">
                        <label for="nombre_vendedor">Nombre Cliente</label>
                        <input type="text" class="form-control form-control-sm" id="nombre_vendedor" name="nombre_vendedor"required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control form-control-sm" id="estado" name="estado"required>
                    </div>
                    <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control form-control-sm" id="municipio" name="municipio"required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_inmueble">Tipo Inmueble</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble1" value="Casas" >
                            <label class="form-check-label" for="tipo_inmueble1">Casas</label>
                            </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble2" value="Departamentos">
                            <label class="form-check-label" for="tipo_inmueble2">Departamentos</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble3" value="Oficinas" >
                            <label class="form-check-label" for="tipo_inmueble3">Oficinas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_inmueble" id="tipo_inmueble4" value="Terrrenos">
                            <label class="form-check-label" for="tipo_inmueble4">Terrrenos</label>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="costo_de_inmueble">Costo del Inmueble</label>
                        <input type="text" class="form-control form-control-sm" id="costo_de_inmueble" name="costo_de_inmueble"required>
                    </div>
                    <div class="form-group">
                        <label for="forma_de_pago">Forma de Pago</label>
                        <input type="text" class="form-control form-control-sm" id="forma_de_pago" name="forma_de_pago"required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>