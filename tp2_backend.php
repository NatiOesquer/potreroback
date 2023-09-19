<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 2</title>
</head>
<body>
    <h1>Trabajo Practico 2</h1>

    <?php
    
    //punto 1
    echo "<h4>Punto 1</h4>";
    $n = 4;
    if ($n > 0) {
        echo "La variable 'n' es un numero positivo <br>";
    }


    //punto 2
    echo "<h4>Punto 2</h4>";
    $a = 6;
    if ($a > 1 & $a < 10) {
        echo "La variable 'a' es mayor a 1 y menor que 10 <br>";
    }

    //punto 3
    echo "<h4>Punto 3</h4>";
    $b = 15;
    if ($b > 10 || $b < 2) {
        echo "La variable 'b' es mayor a 10 o menor que 2 <br>";
    }

    //punto 4
    echo "<h4>Punto 4</h4>";
    $numero1 = 8;
    $numero2 = 6;
    if ($numero1>$numero2) {
        echo "<h5>Primera condicion</h5>";
        echo "El resultado de la suma de las variables es: ".$numero1 + $numero2."<br>";
        echo "El resultado de la resta de las variables es: ".$numero1 - $numero2."<br>";
    } elseif ($numero1<$numero2) {
        echo "<h5>Segunda condicion</h5>";
        echo "El resultado de la multiplicacion de las variables es: ".$numero2*$numero1."<br>";
        echo "El resultado de la division de las variables es: ".$numero2 / $numero1."<br>";
        echo "El resto de las variables es: ".$numero2 % $numero1."<br>";
    }else{
        echo "<h5>Tercera condicion</h5>";
        echo "Los números ingresados son iguales";
    }
    

    ?>
</body>
</html>