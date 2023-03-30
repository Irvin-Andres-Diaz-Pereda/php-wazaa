<?php
include("./cn.php");




// function insertData(){

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$vivienda = $_POST["vivienda"];
$numControl = $_POST["numControl"];
// global $nombre, $apellido, $telefono, $vivienda, $numControl;

$insertar = "INSERT INTO alumnos (nombre,apellido,telefono,vivienda, numControl) VALUES ('$nombre','$apellido','$telefono','$vivienda,'$
')";

$resultado = mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script>alert('Se ha podido registrar el usuarion con exito'); window.location='/'</script>";

} else {
    echo "<script>alert('No se pudo registrar');window,history.go(-1);<script>";
}
// }

// insertData();