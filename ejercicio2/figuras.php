<?php
    $opcion_figura = $_POST["opcion_figura"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 2</title>
</head>
<body>
    <h1 align="center">Universidad de las Fuerzas Armadas Espe</h1>
	<h2>Integrantes: Pichucho Galo - Rivera Santiago - Vivas Santiago</h2>
	<h3>Ejercicio 2</h3>

    <form name="forma" method="POST" action="./resultado.php">
    
        <?php
        if($opcion_figura == "triangulo"){
            ?>
            <h4>Triángulo</h4> 
            <label for="lado">Ingrese el lado 1:</label>
            <input type="number" id="lado_t1" name="lado_t1" min=0> <br><br>
            <label for="lado">Ingrese el lado 2:</label>
            <input type="number" id="lado_t2" name="lado_t2" min=0> <br><br>
            <label for="lado">Ingrese el lado 3:</label>
            <input type="number" id="lado_t3" name="lado_t3" min=0> <br><br>
            <input type="submit" name="opcion" value="Calcular Triangulo"> <br><br>
            <?php
        }elseif($opcion_figura == "cuadrado"){
            ?>
            <h4>Cuadrado</h4>    
            <label for="cuadrado">Ingrese un lado:</label>
            <input type="number" id="lado_c" name="lado_c" min=0> <br><br>
            <input type="submit" name="opcion" value="Calcular Cuadrado"> <br><br>
            <?php
        }elseif($opcion_figura == "rectangulo"){
            ?>
            <h4>Rectángulo</h4>    
            <label for="rectangulo">Ingrese el lado 1:</label>
            <input type="number" id="lado_r1" name="lado_r1" min=0> <br><br>
            <label for="rectangulo">Ingrese el lado 2:</label>
            <input type="number" id="lado_r2" name="lado_r2" min=0> <br><br>
            <input type="submit" name="opcion" value="Calcular Rectangulo"> <br><br>
            <?php
        }elseif($opcion_figura == "circulo"){
            ?>
            <h4>Circulo</h4>    
            <label for="circulo">Ingrese el radio:</label>
            <input type="number" id="radio_c" name="radio_c" min=0> <br><br>
            <input type="submit" name="opcion" value="Calcular Circulo"> <br><br>
            <?php
        }
        ?>
	</form>
 <a href="./menu_figuras.html">Regresar</a>
 
</body>
</html>