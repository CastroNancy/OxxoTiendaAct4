<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="caducidad">Caducidad:</label>
		<input class="form-control" name="caducidad" required type="date" id="caducidad" placeholder="Escribe el código">

		<label for="tamaño">tamaño:</label>
		<input required id="tamaño" name="tamaño" required type="text"  placeholder="tamaño" class="form-control"></input>

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="precioCompra">Precio de compra:</label>
		<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		
		<label for="distrubuidora">distrubuidora:</label>
		<input required id="distrubuidora" name="distrubuidora" required type="text"  placeholder="Distribuidora" class="form-control"></input>
		
		<label for="id_sucursal">id_sucursal:</label>
		<input required id="id_sucursal" name="id_sucursal" required type="number"  placeholder="Id de la sucursal" class="form-control"></input>
		
		<label for="nombreProducto">nombreProducto:</label>
		<input required id="nombreProducto" name="nombreProducto" required type="text"  placeholder="Id de la sucursal" class="form-control"></input>

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>