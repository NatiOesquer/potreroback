<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Bucle</title>
</head>

<body>
    <?php

    //punto 1

    print "<p>Ejercicio 1</p>\n";

    for ($i = 1; $i <= 100; $i++) {
        print "<p>$i</p>\n";
    }

    //punto 2

    print "<p>Ejercicio 2</p>\n";

    for ($i = 100; $i >= 1; $i--) {
        print "<p>$i</p>\n";
    }


    //punto 3

    print "<p>Ejercicio 3</p>\n";

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            print "<p>$i</p>\n";
        }
    }


    // punto 4

    print "<p>Ejercicio 4</p>\n";

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            print "<p>$i</p>\n";
        }
    }

    // punto 5

    print "<p>Ejercicio 5</p>\n";

    $suma = 0;
    for ($i = 1; $i <= 20; $i++) {
        $suma += $i;
    }
    print $suma;

    //punto 6

    print "<p>Ejercicio 6</p>\n";

    $sumaPares = 0;

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            $sumaPares += $i;
        }
    }

    print $sumaPares;


    ?>
</body>

</html>