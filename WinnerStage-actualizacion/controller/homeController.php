<?

class homeController
{

    private $MODEL;
    public function __construct()
    {
        require_once("c://xampp/htdocs/WinnerStage-copia/model/homeModel.php");
        $this->MODEL = new HomeModel();

    }

    public function guardarUsuario($nombres, $apellidos, $celular, $cedula, $correo, $contraseña, $confirmarcontraseña, $invitado)
    {
        
        $valor = $this->MODEL->registrarUsuario($this->limpiarNombres($nombres), $this->limpiarApellidos($apellidos), $this->limpiarCelular($celular), $this->limpiarCedula($cedula), $this->limpiarCorreo($correo), $this->encriptarContraseña($this->limpiarContraseña($contraseña)), $this->encriptarContraseña($this->limpiarConfContraseña($confirmarcontraseña)), $this->limpiarInvitado($invitado));
        return $valor;

    }

    public function limpiarNombres($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function limpiarApellidos($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function limpiarCelular($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function limpiarCedula($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function limpiarCorreo($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function limpiarContraseña($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function limpiarConfContraseña($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function limpiarInvitado($campo)
    {

        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
        $campo = htmlspecialchars($campo);
        return $campo;

    }

    public function encriptarContraseña($contraseña)
    {

        return password_hash($contraseña,PASSWORD_DEFAULT);

    }
}
?>