<?php
    $num= $_POST["num"];
   
?>
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
    <h3>Resultado Ejercicio 1</h3>
    </div>
    
	<div class="form-style">
        <h3>Tabla de multiplicar</h3>
        <div class="resul2">
        <?php
         for ($i=0; $i<=20;$i++){
        $res= $num * $i;
        echo "$num * $i = $res <br>";
        }
         ?>
        </div>
    <p><a href="./ej1.php">Regresar</a> <br></p>
    <p><a href="../index.html">Menu Principal</a></p>
    </div>
</body>
</html>