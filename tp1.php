<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 1</title>
</head>

<body>

    <h1>Tp 1 </h1>

    <?php 

    //punto 1

    echo "Hola Mundo <br>";   

    //punto 2

    $Saludo = "Hola Mundo";
    echo $Saludo."<br>";
    
    //punto 3

    $variable1 = 800;
    $variable2 = 400;
    $totalSuma = $variable1 + $variable2;
    echo "El total de la suma es: " .$totalSuma."<br>";
   
    $totalResta = $variable1 - $variable2;
    echo "El total de la resta es: ".$totalResta."<br>";
   
    $totalMulti = $variable1 * $variable2;
    echo "El total de la multiplicacion es: ".$totalMulti."<br>";
   
    $totalDiv = $variable1 / $variable2;
    echo "El total de la division es: ".$totalDiv."<br>";
    
    $totalResto = $variable1 % $variable2;
    echo "El resto es: ".$totalResto."<br>";

    //punto 4
   
    $celcius = 20;
    $fahrenheit = ($celcius * 9/5) + 32;
    echo "20 grados Celsius equivalen a ".$fahrenheit. " grados Fahrenheit. <br>";

    //punto 5-a
    
    $base = 18;
    $altura = 12;
    $areaRectangulo = $base * $altura;
    echo "El area del rectangulo es: ".$areaRectangulo."<br>";
  
    $perimetroRectangulo = 2 * ($base + $altura);
    echo "El perimetro del rectangulo es: ".$perimetroRectangulo."<br>";

    //punto 5-b

    $radioCirculo = 30;
    $pi = 3.1416;
    $areaCirculo = $pi * ($radioCirculo ** 2);
    echo "El area del circulo es: ". $areaCirculo."<br>";

    $perimetroCirculo = 2 * $pi * $radioCirculo;
    echo "El perimetro del circulo es: " .$perimetroCirculo;







    ?>

</body>

</html>