<?php
    $opcion_figura = $_POST["opcion_figura"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 2</title>
</head>
<body>
    <div class = "title">
		<h1>Universidad de las Fuerzas Armadas Espe</h1> <br>
		<h2>Integrantes: Pichucho Galo - Rivera Santiago - Vivas Santiago</h2>	<br>
		<h3>Ejercicio 2</h3>
	</div>

    <form class="form-style" name="forma" method="POST" action="./resultado.php">
    
        <?php
        if($opcion_figura == "triangulo"){
            ?>
            <h3>Triángulo</h3> 
            <label for="lado">Ingrese el lado 1:</label><br>
            <input class="controls" type="number" id="lado_t1" name="lado_t1" min=0 step="any"> <br><br>
            <label for="lado">Ingrese el lado 2:</label><br>
            <input class="controls" type="number" id="lado_t2" name="lado_t2" min=0 step="any"> <br><br>
            <label for="lado">Ingrese el lado 3:</label><br>
            <input class="controls" type="number" id="lado_t3" name="lado_t3" min=0 step="any"> <br><br>
            <input class="btn" type="submit" name="opcion" value="Calcular Triangulo"> <br><br>
            <?php
        }elseif($opcion_figura == "cuadrado"){
            ?>
            <h3>Cuadrado</h3>    
            <label for="cuadrado">Ingrese un lado:</label><br>
            <input class="controls" type="number" id="lado_c" name="lado_c" min=0 step="any"> <br><br>
            <input class="btn" type="submit" name="opcion" value="Calcular Cuadrado"> <br><br>
            <?php
        }elseif($opcion_figura == "rectangulo"){
            ?>
            <h3>Rectángulo</h3>    
            <label for="rectangulo">Ingrese el lado 1:</label> <br>
            <input class="controls" type="number" id="lado_r1" name="lado_r1" min=0 step="any"> <br><br>
            <h4 for="rectangulo">Ingrese el lado 2:</h4>
            <input class="controls" type="number" id="lado_r2" name="lado_r2" min=0 step="any"> <br><br>
            <input class="btn" type="submit" name="opcion" value="Calcular Rectangulo"> <br><br>
            <?php
        }elseif($opcion_figura == "circulo"){
            ?>
            <h3>Circulo</h3>    
            <label for="circulo">Ingrese el radio:</label> <br>
            <input class="controls" type="number" id="radio_c" name="radio_c" min=0 step="any"> <br><br>
            <input class="btn"  type="submit" name="opcion" value="Calcular Circulo"> <br><br>
            
            <?php
        }
        ?>
        <p><a href="./menu_figuras.html">Regresar</a></p>
	</form>

 
</body>
</html>