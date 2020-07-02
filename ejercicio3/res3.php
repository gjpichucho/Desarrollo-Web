<?php
    $fec_nac= $_POST["fec_nac"];
    $fec_actual=date("Y-m-d");
    $dia_actual=date("d");
    $mes_actual=date("m");
    $anio_actual=date("Y");
    $dia_fec_nac=date("d",strtotime($fec_nac));
    $mes_fec_nac=date("m",strtotime($fec_nac));
    $annio_fec_nac=date("Y",strtotime($fec_nac));
    if (($mes_fec_nac == $mes_actual) && ($dia_fec_nac > $dia_actual)) {
        $anio_actual=($anio_actual-1); 
    }
    if ($mes_fec_nac > $mes_actual) {
        $anio_actual=($anio_actual-1);
    }
    $edad=($anio_actual-$annio_fec_nac);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 3</title>
</head>
<body>
	<h1 align="center">Universidad de las Fuerzas Armadas Espe</h1>
	<h2>Integrantes: Pichucho Galo - Rivera Santiago - Vivas Santiago</h2>
    <?php
        echo "Fecha Actual: " .$fec_actual."<br>";
        echo "Fecha de Nacimiento: " .$fec_nac."<br>";
        echo "La edad de la persona es: " .$edad." años<br>";
    ?>

    <a href="./ej3.php">Regresar</a> <br>
    <a href="../index.html">Menu Principal</a>
	
</body>
</html>