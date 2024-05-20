<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario = "SELECT * FROM persona WHERE nombre_usuario ='$_POST[nombre_usuario]' ";

$resulatdo = $conexion-> query($buscarusuario);
$count=mysqli_num_rows($resulatdo);
if($count == 1){
    echo"El usuario ya esta registrado";
    echo"<a href='index.html'>Nuevo Registro</a>";
}else{
    mysqli_query($conexion,"INSERT INTO persona (
        nombre_usuario,equipo_usuario,direccion_usuario,numero_usuario,correo_usuario,contraseña_usuario,fecha_registro)
        VALUES(
            '$_POST[nombre_usuario]',
            '$_POST[equipo_usuario]',
            '$_POST[direccion_usuario]',
            '$_POST[numero_usuario]',
            '$_POST[correo_usuario]',
            '$_POST[contraseña_usuario]',
            '$_POST[fecha_registro]'
    )");
    echo "<br> <h1>Usuario creado con exito</h1>";
    echo "<a href='./index.php'>Puedes generar un Nuevo registro</a>";
}
?>