<?php
$user_db="root";
$pass_db="1234";
$db_name="DbWEB1"
$host_db="127.0.0.1";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion no sirve ".$conexion->connect_error);
}
?>