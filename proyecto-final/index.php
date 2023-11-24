<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">

  <!-- CSS del bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Amira NC</title>
</head>

<body>

  <!-- <button type="submit"><a href="index.html">Inicio</a></button>
  <button type="submit"><a href="listar.php">Listar ropa</a></button>
  <button type="submit"><a href="agregar.html">Agregar ropa</a></button> -->
  <!-- <table>
    <tr>
      <th><a href="buzo.php">Buzo</a></th>
      <th></th>
      <th></th>
      <th><a href="nike.php">Nike</a></th>
      <th></th>
      <th></th>
      <th><a href="precio.php">Precio</a></th>
    </tr>
  </table> -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:black">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="nav">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" id="nav">Addidas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="nav">Nike</a>
          </li>

        </ul>
        <form class="d-flex">
          <a href="login.html" id="login">Login</a>
        </form>
      </div>
    </div>
  </nav>

  <div class="titulo">
    <!-- <h1>Amira NC</h1> -->
    <img src="./assets/img/logo.png" alt="logo" style="height: 300px;">
    <img src="./assets/img/marca.png" alt="marcas" style="height: 320px;">
  </div>




  <h2>Lista de ropa</h2>
  <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

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
        $consulta = 'SELECT * FROM ropa';

        // 3) Ejecutar la orden y obtenemos los registros
        $datos = mysqli_query($conexion, $consulta);

        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) { ?>
        
          <div class="card" style="width: 18rem;">
          <h5 class="card-title"><?php echo $reg['prenda']; ?></h5>
            <img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" class="card-img-top" alt="...">
            <div class="card-body" id="ubc">  
                  
              <a href="ver.php?id=<?php echo $reg['id']; ?>" >
              <h3 class="card-title"  style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>
            </a>
           
              <a href="#" class="btn btn-primary" id="btn">Ver Producto</a>
            </div>
          </div>
          
        <?php } ?>

      </div>
    </div>
  </section>
  <footer>
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
  <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>