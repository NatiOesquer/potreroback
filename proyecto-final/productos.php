<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("localhost:3307","root","");
 mysqli_select_db($conexion,"tienda");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta= mysqli_query($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amira NC</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">

    <!-- CSS del bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

<?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $prenda=$datos["prenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];
       ?>
    <div class="card mb-3" style="width: 99%; min-height: 60vh;">
        <div class="row g-0">
            <div class="col-md">
            </div>
            <div class="col-md">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="data:image/jpg;base64, <?php echo base64_encode($datos['imagen']) ?>" alt="img" width="250px" height="250px">
                        </div>
                        
                    </div>
                   
                </div>
            </div>
            <div class="col-md">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$prenda"; ?></h5>
                    <p class="card-text"><?php echo "$marca"; ?></p>
                   
                    <p class="card-text"><small class="text-body-secondary"><?php echo "$talle"; ?></small></p>
                    <h5 class="card-title"><?php echo "$precio"; ?></h5>
                    <a type="submit" class="btn btn-info" href="index.php">Volver al inicio</a>
                    <a type="submit" class="btn btn-danger" target="_blank" href="https://link.mercadopago.com.ar/amiranc">Pagar</a>
                </div>
            </div>
            <div class="col-md">
            </div>
        </div>
    </div>
  
       
    <footer style="position: fixed;bottom: 0;">
        <div class="footer">
            <p>"Amira NC, tu destino para el rendimiento y estilo deportivo. En nuestra tienda, fusionamos pasión por el deporte con moda y funcionalidad. Descubre una amplia gama de productos de alta calidad, diseñados para potenciar tu rendimiento y realzar tu estilo. Equípate con lo mejor en indumentaria y accesorios deportivos. En Amira NC, nos comprometemos a inspirar y apoyar tu viaje hacia un estilo de vida activo. ¡Eleva tu juego con nosotros!"</p>
        </div>
        <div class="redes">
            <a href="https://www.facebook.com/?locale=es_LA" target="_blank">
                <img src="./assets/img/facebook.png" alt="">
            </a>
            <a href="https://twitter.com/?lang=es" target="_blank">
                <img src="./assets/img/twitter.png" alt="">
            </a>
            <a href="https://github.com/" target="_blank">
                <img src="./assets/img/github.png" alt="">
            </a>
            <a href="https://ar.linkedin.com/" target="_blank">
                <img src="./assets/img/linkedin.png" alt="">
            </a>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>