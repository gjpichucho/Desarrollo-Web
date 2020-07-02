<?php
    $area=0;
    $perimetro=0;
    $opcion = $_POST["opcion"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>Universidad de las Fuerzas Armadas Espe</h1>
	<h2>Grupo: Pichucho Galo - Rivera Santiago - Vivas Santiago</h2>
	<h3> Resultados</h3>

    <?php
    if($opcion == "Calcular Triangulo"){
        $lado_t1= $_POST["lado_t1"];
        $lado_t2= $_POST["lado_t2"];
        $lado_t3= $_POST["lado_t3"];
        
        if(($lado_t1+$lado_t2)>$lado_t3 && ($lado_t1+$lado_t3)>$lado_t2 && ($lado_t2+$lado_t3)>$lado_t1){
            $perimetro = $lado_t1 + $lado_t2 + $lado_t3;
            $semiperiemtro = $perimetro/2;
            $area = sqrt($semiperiemtro*($semiperiemtro-$lado_t1)*($semiperiemtro-$lado_t2)*($semiperiemtro-$lado_t3));?>
            <h4>Triángulo</h4>
            <label for="Area_T">Area:<?=$area ?> </label> <br>
            <label for="Perimetro_T">Perimetro: <?=$perimetro ?></label>
        <?php
        }
        else{
            ?> <label for="Area_T">El triangulo No existe</label> <?php
        }
    }elseif($opcion == "Calcular Cuadrado"){
        $lado_c= $_POST["lado_c"];

        $perimetro= $lado_c*4;
        $area= pow($lado_c,2);?> 
        <h4>Cuadrado</h4> 
        <label for="Area_T">Area: <?=$area ?></label> <br>
        <label for="Perimetro_T">Perimetro: <?=$perimetro ?> </label>
    <?php
    }elseif($opcion == "Calcular Rectangulo"){
        $lado_r1= $_POST["lado_r1"];
        $lado_r2= $_POST["lado_r2"];

        $perimetro= $lado_r1*2 + $lado_r2*2;
        $area= $lado_r1*$lado_r2;
        ?> 
        <h4>Rectángulo</h4>  
        <label for="Area_T">Area: <?=$area?> </label> <br>
        <label for="Perimetro_T">Perimetro: <?=$perimetro?> </label>
    <?php  
    }elseif($opcion == "Calcular Circulo"){
        $radio_c= $_POST["radio_c"];

        $perimetro= 2*M_PI*$radio_c;
        $area= pow($radio_c,2)*M_PI;
        ?>    
        <h4>Circulo</h4>
        <label for="Area_T">Area: <?=$area?> </label> <br>
        <label for="Perimetro_T">Perimetro: <?=$perimetro?> </label>
        <?php } ?> <br><br>

 <a href="./menu_figuras.html">Menu Figuras</a><br><br>
 <a href="../index.html">Menu Principal</a>
</body>
</html>