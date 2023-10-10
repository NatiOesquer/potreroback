<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 5 Array</title>
</head>
<body>
    
    <?php
    
    //punto 1 

    print "<p>Ejercicio 1</p>\n";

    //$i=[1,2,3,4,5,6,7,8,9,10];
    $numerosPares = [];
    for($i=2; $i<=10; $i+=2){
        $numerosPares[] = $i;
    }
    foreach($numerosPares as $numero){
        print $numero."<br>";
    }
    
    //punto 2

    print "<p>Ejercicio 2</p>\n";

    $datos = ["Pedro","Ana",34,1];
    print_r($datos);

    //punto 3

    print "<p>Ejercicio 3</p>\n";
    
    $datosPersonales =["Nombre" => "Pedro",
                       "Apellido" => "Torres",
                       "Direccion"=> "Av. Mayor 3703",
                       "Telefono" => "1122334455"];

                       
    print "Nombre: ".($datosPersonales["Nombre"]);
    print "<pre>\n";
    print "Apellido: ".($datosPersonales["Apellido"]);
    print "<pre>\n";
    print "Dirección: ".($datosPersonales["Direccion"]);
    print "<pre>\n";
    print "Teléfono: ".($datosPersonales["Telefono"]);
    print "<pre>\n";

    //punto 4
    
    print "<p>Ejercicio 4</p>\n";

    $ciudades = ["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
    
    foreach($ciudades as $i => $ciudad){
        print "La ciudad con el índice ". $i . " tiene el nombre ". $ciudad;
        print "<pre>\n";
    }

    //punto 5
    
    print "<p>Ejercicio 5</p>\n";

    $cities = ["MD" => "Madrid",
               "BCL" => "Barcelona",
               "LD" => "Londres",
               "NY" => "New York",
               "LA" => "Los Ángeles",
               "CCG" => "Chicago"];

    foreach($cities as $indice => $city){
        print "El índice de  ". $city . "  es  ". $indice;
        print "<pre>\n";
    }





    ?>


</body>
</html>