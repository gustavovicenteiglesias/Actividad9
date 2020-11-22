<?php
include "../conexion/conn.php";
$nombre_campania=$_POST['nombre_campania'];
// consulta SQL a nuestra tabla "usuarios" que se encuentra en la base de datos "Prueba.accdb"
$sql="Select * from Campanias ";
$insert= "INSERT INTO Campanias (RazonSocial) VALUES('$nombre_campania')";
// generamos la tabla mediante odbc_result_all(); utilizando borde 1
$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
$result1=odbc_exec($cid,$insert)or die(exit("Error en odbc_exec"));
print odbc_result_all($result,"border=1");
?>