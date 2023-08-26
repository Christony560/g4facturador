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
            <label>Metodo Pago</label>
            <select name="metodo_pago" id="metodo_pago" class="form-style" required>
                <option value="">Seleccione un metodo de pago</option>
                <option value="1">Tarjeta de Crédito</option>
                <option value="2">Transferencia Bancaria</option>
                <option value="3">Efectivo</option>
                <option value="4">Cheque</option>
                <option value="5">Pago Móvil</option>
                </select>
             <button type="submit" class="btn" name="Guardar">Guardar</button>
            <button class="btn" onclick="location.href='<?php echo site_url('dashboard/index'); ?>'">Regresar</button>
 
        </form>
    </div>
</body>
</html>
