<?php
$user_db="if0_36150764";
$pass_db="W6UVaR3PUL7Gi";
$db_name="if0_36150764_ICO"
$host_db="sql101.infinityfree.com";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion no sirve ".$conexion->connect_error);
}
?>