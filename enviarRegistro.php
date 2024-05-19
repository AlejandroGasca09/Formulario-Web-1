<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario = "SELECT * FROM persona WHERE nombre_usuario ='$_POST[nombre_usuario]' ";

$resulatdo = $conexion-> query($buscarusuario);
$count=mysqli_num_rows($resulatdo)
if($count == 1){
    echo"El usuario ya esta registrado";
    echo"<a href='index.html'>Nuevo Registro</a>";
}else{
    mysqli_query($conexion,"INSERT INTO persona (
        nombre_usuario,equipo_usuario,direccion_usuario,numero_usuario,correo_usuario,contraseña_usuario,fecha_registro)
        VALUES(
            '$POST[nombre_usuario]',
            '$POST[equipo_usuario]',
            '$POST[direccion_usuario]',
            '$POST[numero_usuario]',
            '$POST[correo_usuario]',
            '$POST[contraseña_usuario]',
            '$POST[fecha_registro]'
    )");
}
?>