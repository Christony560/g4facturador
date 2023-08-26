<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingreso Proforma</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/Detalle/style.css'); ?>">
</head>
<body>
<div class="form-container">
        <h1>Ingreso de Detalle de Venta</h1>
        <form method="POST" action="<?php echo base_url('Detalle/insertar'); ?>">
            <div class="form-group">
                <label for="detalle_venta_id">Detalle Venta ID</label> 
                <input type="text" class="form-style" name="detalle_venta_id" id="detalle_venta_id"  required>
            </div>
            <div class="form-group">
                <label for="detalle_producto_id">Detalle Producto ID</label> 
                <input type="text" class="form-style" name="detalle_producto_id" id="detalle_producto_id" required>
            </div>
            <div class="form-group">
                <label for="detalle_descripcion">Descripción</label> 
                <input type="text" class="form-style" name="detalle_descripcion" id="detalle_descripcion" required>
            </div>
            <div class="form-group">
                <label for="detalle_cantidad">Cantidad</label> 
                <input type="number" class="form-style" name="detalle_cantidad" id="detalle_cantidad" required>
            </div>
            <div class="form-group">
                <label for="detalle_precio_unitario">Precio Unitario</label> 
                <input type="number" class="form-style" name="detalle_precio_unitario" id="detalle_precio_unitario" step="0.01" required>
            </div>
            <button type="submit" class="btn" name="Guardar">Guardar Detalle</button>
        </form>
    </div>
</body>
</html>

