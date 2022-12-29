<?php

require_once("html/home_usuario.html");
require_once("html/not_log.html");


$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

session_start();

$_SESSION['usuario?'] = $usuario;

include ('conexionbd.php');

$consulta="SELECT * FROM login_in_usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location:home_usuario.html");
}else{
    ?>
    <?
        include("not_log.html")
    ?>
    <h1>F EN EL CHAT</h1>
    <?php

}

mysqli_free_result($resultado);
mysqli_close($conexion);

