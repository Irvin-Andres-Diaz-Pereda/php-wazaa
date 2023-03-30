
<?php
if (!$_POST){
	header("Location:Monedas.html");
}
$monedas = $_POST['monedas'];
$monedas2 = $_POST['monedas2'];
$cantidad = $_POST['cantidad'];


if ($monedas == 'franco_suizo') {
        if ($monedas2 == 'boliviano') {
            $convertir = 7.48;
        } elseif ($monedas2 == 'peso_mexicano') {
            $convertir = 20.18;
        } elseif ($monedas2 == 'dolar_usa') {
            $convertir = 1.08;
        } elseif ($monedas2 == 'dolar_australiano') {
            $convertir = 1.62;
        } elseif ($monedas2 == 'Euro') {
            $convertir = 1.01;
        }
	   
        } elseif ($monedas == 'boliviano') {
        if ($monedas2 ==  'franco_suizo') {
            $convertir = 0.13;
        } elseif ($monedas2 == 'peso_mexicano') {
            $convertir = 2.70;
        } elseif ($monedas2 == 'dolar_usa') {
            $convertir = 0.14;
        } elseif ($monedas2 == 'dolar_australiano') {
            $convertir = 0.22;
        } elseif ($monedas2 == 'Euro') {
            $convertir = 0.13;
        }
    } elseif ($monedas == 'peso_mexicano') {
        if ($monedas2 ==  'franco_suizo') {
            $convertir = 0.050;
        } elseif ($monedas2 == 'boliviano') {
            $convertir = 0.37;
        } elseif ($monedas2 == 'dolar_usa') {
            $convertir = 0.054;
        } elseif ($monedas2 == 'dolar_australiano') {
            $convertir = 0.080;
        } elseif ($monedas2 == 'Euro') {
            $convertir = 0.050;
        }
    } elseif ($monedas == 'dolar_usa') {
        if ($monedas2 ==  'franco_suizo') {
            $convertir = 0.92;
        } elseif ($monedas2 == 'boliviano') {
            $convertir = 24.10;
        } elseif ($monedas2 == 'peso_mexicano') {
            $convertir = 18.63;
        } elseif ($monedas2 == 'dolar_australiano') {
            $convertir = 1.50;
        } elseif ($monedas2 == 'Euro') {
            $convertir = 0.93;
        }
    } elseif ($monedas == 'dolar_australiano') {
        if ($monedas2 ==  'franco_suizo') {
            $convertir = 0.62;
        } elseif ($monedas2 == 'boliviano') {
            $convertir = 4.61;
        } elseif ($monedas2 == 'peso_mexicano') {
             $convertir = 12.45;
        } elseif ($monedas2 == 'Euro') {
            $convertir = 0.62;
        }
    }elseif ($monedas == 'dolar_usa'){
		$convertir = 0.67;
	}
	
     elseif ($monedas == 'Euro') {
        if ($monedas2 ==  'franco_suizo') {
            $convertir = 0.99;
        } elseif ($monedas2 == 'boliviano') {
            $convertir = 7.44;
        } elseif ($monedas2 == 'peso_mexicano') {
            $convertir = 20.06;
        } elseif ($monedas2 == 'dolar_usa') {
            $convertir = 1.08;
        } elseif ($monedas2 == 'dolar_australiano') {
            $convertir = 1.61;
        }
    }

    $cantidad_convertida = $cantidad * $convertir;
    
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Convercion</title>
</head>

<body>
<p>Resultado de la convercion: $<?php echo $cantidad_convertida  ?></p>
<p><?php echo $cantidad?>  <?php echo $monedas ?> son equivalentes a  <?php echo $cantidad_convertida?></p>
	
	
</body>
</html>