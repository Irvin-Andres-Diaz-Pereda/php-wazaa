
<?php
if (!$_POST){
	header("Location:Pedidos.html");
}
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$formadepago = $_POST['formadepago'];
$subtotal = $precio*$cantidad;


if($formadepago == 'tarjeta'){
	$descuento = $subtotal * 0.10;
}
elseif($formadepago == 'efectivo'){
	$descuento = $subtotal*0.15;
}
else {
	$descuento = $subtotal * 0.05;
}
$total= $subtotal-$descuento;

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ticket de compra</title>
</head>

<body>
	<hi>Datos de la compra</hi>
	<p>Producto :<?php echo $producto ?></p>
	<p>Precio: <?php echo $precio  ?></p>
	<p>Cantidad :<?php echo $cantidad  ?></p>
	<p>Forma de pago: <?php echo $formadepago  ?></p>
	<p>Total a pagar: $<?php echo $total  ?></p>
	<p>Subtotal: $<?php echo $subtotal  ?></p>
	<p>Descuento: $<?php echo $descuento  ?></p>
	
</body>
</html>