<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingreso de Venta</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/Detalle/style.css'); ?>">
</head>

<body>
    <div class="form-container">
        <h1>Ingreso de Venta</h1>
        <form method="POST" action="<?php echo base_url('Venta/guardar'); ?>">
            <div class="form-group">
                <label for="detalle_venta_id">Numero de Factura: </label>
                <input type="text" class="form-style" name="detalle_venta_id" id="detalle_venta_id"
                    value="<?php echo $venta_id; ?>" readonly required>
            </div>
            <h2>Detalle de Venta</h2>
            <table id="detalle_table">
                <tr>
                    <th>Producto ID</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                </tr>
                <tr>
                    <td><select name="producto" id="producto" class="form-style" required>
                            <option value="">Seleccione un producto</option>
                            <?php foreach ($productos as $producto): ?>
                                <option value="<?php echo $producto->producto_id; ?>"><?php echo $producto->producto_nombre; ?></option>
                            <?php endforeach; ?>
                        </select></td>
                    <td><input class="form-style" type="text" name="detalle_producto_id[]" required></td>
                    <td><input class="form-style" type="text" name="detalle_descripcion[]" required></td>
                    <td><input class="form-style" type="number" name="detalle_cantidad[]" required></td>
                    <td><input class="form-style" type="number" step="0.01" name="detalle_precio_unitario[]" required>
                    </td>
                </tr>
            </table>

            <button type="button" class="btn" onclick="agregarFila()">Agregar Producto</button>

            <button type="submit" class="btn" name="Guardar">Guardar Venta</button>
        </form>
    </div>

    <script>
        function agregarFila() {
            var table = document.getElementById("detalle_table");
            var row = table.insertRow();

            var productoIdCell = row.insertCell();
            var descripcionCell = row.insertCell();
            var cantidadCell = row.insertCell();
            var precioUnitarioCell = row.insertCell();

            productoIdCell.innerHTML = '<input type="text" name="detalle_producto_id[]" required>';
            descripcionCell.innerHTML = '<input type="text" name="detalle_descripcion[]" required>';
            cantidadCell.innerHTML = '<input type="number" name="detalle_cantidad[]" required>';
            precioUnitarioCell.innerHTML = '<input type="number" step="0.01" name="detalle_precio_unitario[]" required>';
        }
    </script>
</body>

</html