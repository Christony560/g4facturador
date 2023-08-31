<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Venta</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/Ticket/Css/style.css'); ?>">
</head>
<body>
    <div class="recibo">
        <div class="titulo">Recibo de Venta</div>
        <?php foreach ($detalles as $detalle): ?>
            <div class="detalle">
                <div class="">
                    <label>Numero de factura: </label>
                    <?php echo $detalle->detalle_Venta_id; ?>
                </div>
                <div class="">
                    <label for="">Codigo de producto: </label>
                    <?php echo $detalle->detalle_Producto_id; ?>
                </div>
                <div class="">
                    <label for="">Descripcion: </label>
                    <?php echo $detalle->detalle_descripcion; ?>
                </div>
                <div class="">
                    <label for="">Cantidad: </label>
                    <?php echo $detalle->detalle_cantidad; ?>
                </div>
                <div class="">
                    <label for="">Precio Unitario: </label>
                    <?php echo $detalle->detalle_precioUnitario; ?>
                </div>
                <div>
                    <label for="">Total de factura</label>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>