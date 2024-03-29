<?php
session_start();
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
} else {
  header("location:login.html");
}
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
  <h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:black">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" id="nav">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="agregar.html" id="nav">Agregar Ropa</a>
            </li>            
        </ul>
        <span class="nav-item" >
            <a class="nav-link" href="logout.php" id="nav">Log Out</a>
        </span>
      </div>
    </div>
  </nav>
  <table style="border: 2px solid white; width:100% ; padding:5px ;margin: 5px; border-collapse: separate;">
    <tr>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">ID</th>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">TIPO DE PRENDA</th>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">MARCA</th>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">TALLE</th>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">PRECIO</th>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">IMAGEN</th>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">EDITAR</th>
      <th style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;">BORRAR</th>
    </tr>
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


    // 4) Mostrar los datos del registro
    while ($reg = mysqli_fetch_array($datos)) { ?>
      <tr>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><?php echo $reg['id']; ?></td>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><?php echo $reg['prenda']; ?></td>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><?php echo $reg['marca']; ?></td>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><?php echo $reg['talle']; ?></td>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><?php echo $reg['precio']; ?></td>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="" width="100px" height="100px"></td>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><a href="modificar.php?id=<?php echo $reg['id']; ?>">Editar</a></td>
        <td style="border: 2px solid white; padding:5px ;margin: 5px;  text-align: center;"><a href="borrar.php?id=<?php echo $reg['id']; ?>">Borrar</a></td>
      </tr>
    <?php } ?>
  </table>


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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>