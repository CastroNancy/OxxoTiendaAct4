<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["caducidad"]) || !isset($_POST["tamaño"]) || !isset($_POST["precioVenta"])|| !isset($_POST["precioCompra"]) || !isset($_POST["existencia"])|| !isset($_POST["distrubuidora"])|| !isset($_POST["id_sucursal"])|| !isset($_POST["nombreProducto"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$caducidad = $_POST["caducidad"];
$tamaño = $_POST["tamaño"];
$precioVenta = $_POST["precioVenta"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];
$distrubuidora = $_POST["distrubuidora"];
$id_sucursal = $_POST["id_sucursal"];
$nombreProducto = $_POST["nombreProducto"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(caducidad, tamaño, precioVenta, precioCompra, existencia, distrubuidora, id_sucursal, nombreProducto) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$caducidad, $tamaño, $precioVenta, $precioCompra, $existencia, $distrubuidora, $id_sucursal, $nombreProducto]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>