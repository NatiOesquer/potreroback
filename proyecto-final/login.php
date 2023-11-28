<?php
$usuario = $_POST["txtusuario"];
$contrasena = $_POST["txtpassword"];

session_start();
$_SESSION["usuario"]=$usuario;

$ckusuario = "admin";
$ckpass = 1234;

if($usuario == $ckusuario && $contrasena == $ckpass){
   header ("location:listar.php");
}else{
    echo "usuario y contrasenia incorrecto";
    header ("location:error.php");
}



?>

