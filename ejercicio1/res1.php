<?php
    $num= $_POST["num"];
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 1</title>
</head>
<body>
    <h1 align="center">Universidad de las Fuerzas Armadas Espe</h1>
	<h2>Integrantes: Pichucho Galo - Rivera Santiago - Vivas Santiago</h2>
	<h3>Resultado Ejercicio 1</h3>
	<?php
    for ($i=0; $i<=20;$i++){
        $res= $num * $i;
        ?>
        <?php echo $num ?> * <?php echo $i ?> = <?php echo $res ?>
        <br>
    <?php
    }
    ?>

    <a href="./ej1.php">Regresar</a> <br>
    <a href="../index.html">Menu Principal</a>
	
</body>
</html>