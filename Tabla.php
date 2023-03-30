<?php

if (!$_POST){
	header("Location:Tabla.html");
}

$tabla = $_POST['tabla'];
$nMaximo = $_POST['maximo'];
$multiplicador = 1;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
	
<h1>Tabla del <?php echo $tabla ?></h1>
<?php
	for($i =1; $i<= $nMaximo; $i++){
		echo "<p>{$tabla} ⋆ {$i} = " . $tabla * $i . "</p>";
	}
?>

<body>
</body>
</html>