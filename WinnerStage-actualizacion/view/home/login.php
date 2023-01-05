<?php
    require_once("c://xampp/htdocs/WinnerStage-copia/view/head/head.php");
?>
<div class="fondo-login">
    <div class="icon">
        <a href="/WinnerStage/index.php">
            <div class="icon">
                <img src="/WinnerStage/view/home/loga.png">
            </div>
        </a>
    </div>
    <div class="titulo">
        <h1>Iniciar Sesión</h1>
    </div>
    <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="InputEmail1" class="form-label">Correo electronico</label>
            <input type="email" name="correo" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                        <i id="eyepassword" class="fa-regular fa-eye changePassword"></i>
                    </button>
                </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <div class="login-parts">
            ¿Olvidaste la contraseña? <a href="recover_password.php" style="text-decoration: none;">Recuperala aqui</a>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
        <div class="login-parts mt-3">
            ¿Eres nuevo? <a href="signup.php" style="text-decoration: none;">Registrate aquí</a>
        </div>
    </form>    
</div>


<?php
    require_once("c://xampp/htdocs/WinnerStage-copia/view/head/footer.php");
?>