<?php 
$host ='localhost';
$user ='id20066280_admin';
$pass =''; 
$bd='id20066280_winnerstage'; 
$conexion=mysqli_connect($host, $user, $pass, $bd); 
if ($conexion->connect_errno) {
    echo "Error: No se pudo conectar a la base de datos.";
}
?>