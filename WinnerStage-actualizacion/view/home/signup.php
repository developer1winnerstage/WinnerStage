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
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="InputName" class="form-label">Nombres</label>
            <input type="text" name="nombres" class="form-control" id="nombres">
        </div>
        <div class="mb-3">
            <label for="InputLastName" class="form-label">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" id="apellidos">
        </div>
        <div class="mb-3">
            <label for="InputPhone" class="form-label">Celular</label>
            <input type="number" name="celular" class="form-control" id="celular">
        </div>
        <div class="mb-3">
            <label for="InputId" class="form-label">Cedula</label>
            <input type="number" name="cedula" class="form-control" id="cedula">
        </div>
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Correo electronico</label>
            <input type="email" name="correo" class="form-control" id="correo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Contraseña</label>
            <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('contraseña','eyepassword')">
                        <i id="eyepassword" class="fa-regular fa-eye changePassword"></i>
                    </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="contraseña">
        </div>
        <div class="mb-3">
            <label for="InputConfPassword" class="form-label">Confrimar contraseña</label>
            <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('confirmarcontraseña','confeyepassword')">
                        <i id="confeyepassword" class="fa-regular fa-eye changePassword"></i>
                    </button>
            </div>
            <input type="password" name="confirmarcontraseña" class="form-control" id="confirmarcontraseña">
        </div>
        <div class="mb-3">
            <label for="InputInvEmail" class="form-label">Invitacion</label>
            <input type="email" name="invitado" class="form-control" id="InputInvEmail" aria-describedby="emailHelp">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>
        <div class="login-parts mt-3">
            ¿Ya estas registrado? <a href="login.php" style="text-decoration: none;">Inicia sesión aquí</a>
        </div>
    </form>    
</div>

<?php
    require_once("c://xampp/htdocs/WinnerStage-copia/view/head/footer.php");
?> 