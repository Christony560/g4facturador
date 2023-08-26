<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Ventas</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/Venta/style.css'); ?>">
</head>
<body>
    <div class="form-container">
       <h1>Registro de Ventas</h1>
        <form method="POST" action="<?php echo base_url('Venta/insertar') ?>">
            <div class="form-group">
                <label for="fecha">Fecha</label> 
                <input type="date" class="form-style" name="fecha" id="fecha" required placeholder="Fecha">
            </div>
            <div class="form-group mt-2">
                <label for="cliente">Cliente</label>
                <select name="cliente" id="cliente" class="form-style" required>
                    <option value="">Seleccione un cliente</option>
                    <?php foreach($clientes as $cliente): ?>
                        <option value="<?php echo $cliente->cliente_id; ?>"><?php echo $cliente->cliente_nombre; ?> <?php echo $cliente->cliente_apellido; ?></option>
                    <?php endforeach; ?>
                </select>
            <div class="form-group mt-2 ">
                <label for="producto">Producto</label>
                <input type="text" class="form-style" name="producto" id="producto" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-style" name="cantidad" id="cantidad" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-style" name="precio" id= "precio" required>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" name="total" id ="total"class="form-style" required>
            </div>
            <button type="submit" class="btn" name="Guardar">Guardar</button>
            <button class="btn" onclick="location.href='<?php echo site_url('dashboard/index'); ?>'">Regresar</button>
 
        </form>
    </div>
</body>
</html>
