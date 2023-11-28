<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar 
$conexion = mysqli_connect("localhost:3307", "root", "");
mysqli_select_db($conexion, "tienda");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET["id"];
// Verificar si se ha enviado el formulario de confirmación
if (isset($_POST['confirmar'])) {
  // 3) Preparar la orden SQL
  // DELETE FROM nombre_tabla WHERE campo_tabla=dato
  // => Elimina de la siguiente tabla el registro donde este campo sea igual a este dato
  // DELETE FROM nombre_tabla
  // => Elimina todos los registros de la siguiente tabla
  // a) generar la consulta a realizar
  $consulta = "DELETE FROM ropa WHERE id=$id";
  // 4) Ejecutar la orden y eliminamos el regitro seleccionado
  // a) ejecutar la consulta
  // a) rederigir a index
  mysqli_query($conexion, $consulta);

  header("location:listar.php");
}

// Mostrar la alerta de confirmación con botones de confirmar o cancelar
echo '<script>
function confirmarEliminar() {
    var respuesta = confirm("¿Estás seguro de que deseas eliminar este registro?");
    if (respuesta) {
        document.getElementById("formConfirmar").submit();
    } else {
      window.location.href = "listar.php";
    }
}
</script>';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmar Eliminación</title>
  <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">

  <!-- CSS del bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

  <form id="formConfirmar" method="post" style="display: none;">
    <input type="hidden" name="confirmar" value="1">
  </form>
  <h1 style="display: flex; align-items: center;  justify-content:center;margin: 100px;
    padding: 10px;">Haz click en el botón si deseas eliminar este item</h1>
  <button style="display: flex; align-items: center;  justify-content:center;margin: 100px;
    padding: 10px;" onclick="confirmarEliminar()">Eliminar</button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>