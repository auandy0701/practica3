<?php
require 'conexion.php';
$nombre=$_POST["Nom"];
$mail=$_POST["Email"];
$telefono=$_POST["Telef"];
$sql="INSERT INTO clientes(id_clientes, nombre, mail, telefono)VALUES('','$nombre','$mail','$telefono')";
$resultado=mysql_query($sql,$con);
if ($resultado){
 echo "El registro se almaceno de manera correcta";
}else{
echo "Los datos no se pudieron registrar".mysql_error;
}
mysql_close($con);
?>