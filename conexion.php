<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$baseDatos="phonegap";
$con=mysql_connect($servidor,$usuario,$contrasena)or die("Error de conexiòn".mysql_error());
mysql_select_db($baseDatos, $con);
?>