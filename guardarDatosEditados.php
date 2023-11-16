<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["caducidad"]) || 
	!isset($_POST["tamaño"]) || 
	!isset($_POST["precioCompra"]) || 
	!isset($_POST["precioVenta"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["distrubuidora"]) || 
	!isset($_POST["id_sucursal"]) || 
	!isset($_POST["nombreProducto"]) ||
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$caducidad = $_POST["caducidad"];
$tamaño = $_POST["tamaño"];
$precioCompra = $_POST["precioCompra"];
$precioVenta = $_POST["precioVenta"];
$existencia = $_POST["existencia"];
$distrubuidora = $_POST["distrubuidora"];
$id_sucursal = $_POST["id_sucursal"];
$nombreProducto = $_POST["nombreProducto"];


$sentencia = $base_de_datos->prepare("UPDATE productos SET caducidad = ?, tamaño = ?, precioCompra = ?, precioVenta = ?, existencia = ?, distrubuidora = ?, id_sucursal = ?, nombreProducto = ?  WHERE id = ?;");
$resultado = $sentencia->execute([$caducidad, $tamaño, $precioCompra, $precioVenta, $existencia, $distrubuidora, $id_sucursal, $nombreProducto, $id]);

if($resultado === TRUE){
    header("Location: ./listar.php");
    exit;
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
  
}
?>