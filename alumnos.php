<?php

$alumnos = ['Alexa','Claudio','Dania','Felix','Luis','Juan','Raul','Zair','Alexander','Armando','Emily','Camila','Joanna','Emmanuel','Pedro','Citlaly','America','Leonel','Francisco','Yael'];
$i = 1;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alumnos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	
</head>
	
	<h1>Alumnos matriculados:</h1>
	<div class = "contenedor"> 
		
		<?php
		sort($alumnos);
		
		foreach($alumnos as $alumno){
			echo "<p>$i.- $alumno </p>";
			$i++;
			unset($alumno);
		}
		
		
		?>
	
	</div>
<body>
</body>
</html>