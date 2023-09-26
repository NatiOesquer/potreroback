<?php
$usuario = $_POST["txtusuario"];
$contrasena = $_POST["txtpassword"];

$ckusuario = "admin";
$ckpass = 1234;

if($usuario == $ckusuario && $contrasena == $ckpass){
   header ("location:https://plataforma.potrerodigital.org/");
}else{
    echo "usuario y contrasenia incorrecto";
    header ("location:https://www.lego.com/es-mx/error");
}



?>