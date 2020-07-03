<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../styles/style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 1</title>
</head>
<body>
	<div class = "title">
	<h1>Universidad de las Fuerzas Armadas Espe</h1>
	<h2>Integrantes: Pichucho Galo - Rivera Santiago - Vivas Santiago</h2> <br>
	<h3>Ejercicio 1</h3>
	<p>Crear un programa en PHP, que pida el numero de una tabla (numero del 1 al 10); <br>
		y cuyo resultado sea la impresión de la tabla de multiplicar hasta el 20.</p>
	</div>

	<form class="form-style" name="forma" method="POST" action="res1.php">
		<label for="num1">Ingrese un número del 1 al 10</label>
		<input class="controls" type="number" id=num name="num" min=0 max=10>
		<input class="btn" type="submit" value="Enviar">
		<p><a href="../index.html">Menú Principal</a></p>
	</form>

</body>
</html>