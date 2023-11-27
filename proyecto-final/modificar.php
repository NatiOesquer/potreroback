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
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="en">
    <heameta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">

  <!-- CSS del bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Amira NC</title>
    </head>
    <body>

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
        
      </div>
    </div>
  </nav>
        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $prenda=$datos["prenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];
        $imagen2=$datos['imagen2'];?>
        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos de la prenda.</p>
        <form action="" method="post" enctype="multipart/form-data">
            <label>Tipo de prenda</label>
            <input type="text" name="prenda" placeholder="Tipo de Prenda" value="<?php echo "$prenda"; ?>">
<br><br>
            <label>Marca</label>
            <input type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
<br><br>
            <label>Talle</label>
            <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
<br><br>
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
<br><br>
             <!-- Solo si quieren le agregan la opción para modificar la imagen-->
             <label>Imagen2</label>
             <input type="text" name="imagen2" placeholder="imagen2" value="<?php echo "$imagen2"; ?>">
<br><br>
            <label>Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
<br><br>
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="listar.php">Cancelar</button>
        </form>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){
            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $prenda=$_POST['prenda'];
            $marca=$_POST['marca'];
            $talle=$_POST['talle'];
            $precio=$_POST['precio'];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE ropa SET prenda='$prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";
            // 4') Ejecutar la orden y actualizamos los datos
            // a) ejecutar la consulta
            mysqli_query($conexion,$consulta);
            // a) rederigir a index
            header('location: index.php');
          } ?>
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