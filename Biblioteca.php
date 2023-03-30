<?php
if (!$_POST){
	header("Location:biblioteca.html");
}
$genero = $_POST['genero'];
$Nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$libro = $_POST['libro'];
$adquisicion = date('d/m/y');
$fecha_de_entrega = date('d/m/y', strtotime('+3 day'));


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ticket de compra</title>
</head>

<body>
	<hi>Datos del Registro</hi>
	<p>Genero :<?php echo $genero ?></p>
	<p>Nombre del lector: <?php echo $Nombre  ?></p>
	<p>Codigo del libro :<?php echo $codigo ?></p>
	<p>Nombre del libro: <?php echo $libro  ?></p>
	<p>Fecha de adquisicion: <?php echo $adquisicion  ?></p>
	<p>Fecha de entrega: <?php echo $fecha_de_entrega  ?></p>
	
	
	
</body>
</html>