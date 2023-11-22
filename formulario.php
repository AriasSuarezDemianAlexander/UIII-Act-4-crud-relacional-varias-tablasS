<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Código del paquete:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="nombrep">Nombre del Producto:</label>
		<input class="form-control" name="nombrep" required type="text" id="nombrep" placeholder="Escribe el Nombre">

		<label for="descr">Descripcion:</label>
		<input class="form-control" required type="text" id="descr" name="descr" placeholder="Escribe la Descripcion">

		<label for="preciou">Precio Unitario:</label>
		<input class="form-control" name="preciou" required type="number" id="preciou" placeholder="Escribe el Precio Unitario/individual">

		<label for="stockd">Stock Disponible:</label>
		<input class="form-control" required type="text" id="stockd" name="stockd" placeholder="Stock Disponibles">

		<label for="unidadm">Unidad de Medida:</label>
		<input class="form-control" name="unidadm" required type="text" id="unidadm" placeholder="Unidad de Medida">

		<label for="fechai">Fecha de Ingreso:</label>
		<input class="form-control" required type="text" id="fechai" name="fechai" placeholder="Fecha de Ingreso">

		<label for="marca">Marca:</label>
		<input class="form-control" name="marca" required type="text" id="marca" placeholder="Marca">

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="precioCompra">Precio de compra:</label>
		<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>