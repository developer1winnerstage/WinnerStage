<?php

class homeModel
{
    private $PDO;
    public function __construct()
    {
        require_once("c://xampp/htdocs/WinnerStage-copia/config/db.php");
        $pdo = new db();
        $this->PDO=$pdo->conexion();

    }

    public function registrarUsuario($nombres,$apellidos,$celular,$cedula,$correo,$contraseña,$confirmarcontraseña,$invitado)
    {

        $statement = $this->PDO->prepare("INSERT INTO usuarios VALUES (null,:nombres, :apellidos, :celular, :cedula, :correo, :contrasena, :confirmar_contrasena, :confirmar_invitado)");
        $statement ->bindParam(":nombres",$nombres);
        $statement ->bindParam(":apellidos",$apellidos);
        $statement ->bindParam(":celular",$celular);
        $statement ->bindParam(":cedula",$cedula);
        $statement ->bindParam(":correo",$correo);
        $statement ->bindParam(":contrasena",$contraseña);
        $statement ->bindParam(":confirmar_contrasena",$confirmarcontraseña);
        $statement ->bindParam(":confirmar_invitado",$invitado);
        return ($statement->execute()) ? true : false;
    }
}
?>