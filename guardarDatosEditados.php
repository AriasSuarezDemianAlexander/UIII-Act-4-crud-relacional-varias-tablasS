<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["nombrep"]) || 
	!isset($_POST["descr"]) ||
	!isset($_POST["preciou"]) ||
	!isset($_POST["stockd"]) ||
	!isset($_POST["unidadm"]) ||
	!isset($_POST["fechai"]) ||
	!isset($_POST["marca"]) || 
	!isset($_POST["precioCompra"]) || 
	!isset($_POST["precioVenta"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$nombrep = $_POST["nombrep"];
$descr = $_POST["descr"];
$preciou = $_POST["preciou"];
$stockd = $_POST["stockd"];
$unidadm = $_POST["unidadm"];
$fechai = $_POST["fechai"];
$marca = $_POST["marca"];
$precioCompra = $_POST["precioCompra"];
$precioVenta = $_POST["precioVenta"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("UPDATE tbl_productos SET codigo = ?, nombrep = ?, descr = ?, preciou = ?, stockd = ?, unidadm = ?, fechai = ?, marca = ?, precioCompra = ?, precioVenta = ?, existencia = ? WHERE id = ?;");
$resultado = $sentencia->execute([$codigo, $nombrep, $descr, $preciou, $stockd, $unidadm, $fechai, $marca, $precioCompra, $precioVenta, $existencia, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>