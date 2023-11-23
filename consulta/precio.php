<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Tienda de ropa</h1>
    <table>
        <tr>
            <th><a href="listar.php">Inicio</a></th>
            <th></th>
            <th></th>
            <th><a href="buzo.php">Buzo </a></th>
            <th></th>
            <th></th>
            <th><a href="nike.php">Nike</a></th>
        </tr>
    </table>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <!-- <table border="1">
        <tr>
            <th>ID</th>
            <th>TIPO DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
        </tr> -->
    <section>
        <div class="container">
            <div class="row">
                <?php
                // 1) Conexion
                $conexion = mysqli_connect("localhost:3307", "root", "");
                mysqli_select_db($conexion, "tienda");
                // 2) Preparar la orden SQL
                // Sintaxis SQL SELECT
                // SELECT * FROM nombre_tabla
                // => Selecciona todos los campos de la siguiente tabla
                // SELECT campos_tabla FROM nombre_tabla
                // => Selecciona los siguientes campos de la siguiente tabla
                $consulta = "SELECT*FROM ropa WHERE precio>500";

                // 3) Ejecutar la orden y obtenemos los registros

                $datos = mysqli_query($conexion, $consulta);

                // 4) Mostrar los datos del registro

                while ($reg = mysqli_fetch_array($datos)) { ?>
                    <!-- <tr>
                <td><?php echo $reg['id']; ?></td>
                <td><?php echo $reg['prenda']; ?></td>
                <td><?php echo $reg['marca']; ?></td>
                <td><?php echo $reg['talle']; ?></td>
                <td><?php echo $reg['precio']; ?></td>
            </tr> -->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="" width="100px" height="100px" )>
                        <a href="ver.php?id=<?php echo $reg['id']; ?>" class="card-body">
                            <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
                            <span>$ <?php echo $reg['precio']; ?></span>
                        </a>
                    </div>
                <?php } ?>
                <!-- </table> -->
            </div>
        </div>
    </section>
    <!-- JavaScript del bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>