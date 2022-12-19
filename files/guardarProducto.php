<?php
include("../clases/conexion.php");

$nombreProducto = $_POST["nombreProducto"];
$precioProducto = $_POST["precio"];

$descripcion = '';


$db = new Conexion();

$db->beginTransaction();

$sql = $db->prepare("INSERT INTO products (nameProd, precio, descrip_Prod)
	VALUES (:nombreProducto, :precioProducto, :descripcion)");

$sql->bindParam(':nombreProducto', $nombreProducto, PDO::PARAM_STR);
$sql->bindParam(':precioProducto', $precioProducto, PDO::PARAM_INT);

$sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);



$sql->execute();

if($sql){
    echo "Los datos se guardaron correctamente";
    $db->commit();
}
else{
    echo "Ocurrio un error";
    $db->rollbak();
}
?>
