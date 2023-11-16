<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="caducidad">Caducidad</label>
			<input value="<?php echo $producto->caducidad ?>" class="form-control" name="caducidad" required type="date" id="caducidad" placeholder="Escribe el código">

			<label for="tamaño">Tamaño:</label>
			<input value="<?php echo $producto->tamaño ?>" class="form-control" name="tamaño" required type="text" id="tamaño" placeholder="Precio de venta">

			<label for="tamaño">precioVenta:</label>
			<input value="<?php echo $producto->precioVenta ?>" class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

			<label for="precioCompra">Precio de compra:</label>
			<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

			<label for="existencia">existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			
			<label for="distrubuidora">distrubuidora:</label>
			<input value="<?php echo $producto->distrubuidora ?>" class="form-control" name="distribuidora" required type="text" id="distribuidora" placeholder="distribuidora">
			
			
			<label for="id_sucursal">id_sucursal:</label>
			<input value="<?php echo $producto->id_sucursal ?>" class="form-control" name="id_sucursal" required type="text" id="id_sucursal" placeholder="id_sucursal">

			<label for="nombreProducto">nombreProducto:</label>
			<input value="<?php echo $producto->nombreProducto ?>" class="form-control" name="nombreProducto" required type="text" id="nombreProducto" placeholder="nombreProducto">

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
