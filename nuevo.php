<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["codigo"]) || !isset($_POST["nombrep"]) || !isset($_POST["descr"]) || !isset($_POST["preciou"]) || !isset($_POST["stockd"]) || !isset($_POST["unidadm"]) || !isset($_POST["fechai"]) || !isset($_POST["marca"]) ||  !isset($_POST["precioVenta"]) || !isset($_POST["precioCompra"]) || !isset($_POST["existencia"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$codigo = $_POST["codigo"];
$nombrep = $_POST["nombrep"];
$descr = $_POST["descr"];
$preciou = $_POST["preciou"];
$stockd = $_POST["stockd"];
$unidadm = $_POST["unidadm"];
$fechai = $_POST["fechai"];
$marca = $_POST["marca"];
$precioVenta = $_POST["precioVenta"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("INSERT INTO tbl_productos(codigo, nombrep, descr, preciou, stockd, unidadm, fechai, marca, precioVenta, precioCompra, existencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?);");
$resultado = $sentencia->execute([$codigo, $nombrep, $descr, $preciou, $stockd, $unidadm, $fechai, $marca, $precioVenta, $precioCompra, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>