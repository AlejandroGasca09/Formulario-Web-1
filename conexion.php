<?php
$user_db="root";
$pass_db="";
$db_name="local";
$host_db="localhost:127.0.0.1";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion no sirve ".$conexion->connect_error);
}else {
    // Si no estamos en los archivos específicos, mostrar el mensaje
    if ($archivo_actual !== "enviar_registro.php") {
        echo "Conexión realizada con éxito";
    }
}
?>