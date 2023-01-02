<?php
    require_once("d://xampp/htdocs/WinnerStage/view/head/head.php");
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
            <input type="text" class="form-control" id="InputName">
        </div>
        <div class="mb-3">
            <label for="InputLastName" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="InputLastName">
        </div>
        <div class="mb-3">
            <label for="InputPhone" class="form-label">Celular</label>
            <input type="number" class="form-control" id="InputPhone">
        </div>
        <div class="mb-3">
            <label for="InputId" class="form-label">Cedula</label>
            <input type="number" class="form-control" id="InputId">
        </div>
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Contraseña</label>
            <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('InputPassword','eyepassword')">
                        <i id="eyepassword" class="fa-regular fa-eye changePassword"></i>
                    </button>
            </div>
            <input type="password" class="form-control" id="InputPassword">
        </div>


        <div class="mb-3">
            <label for="InputConfPassword" class="form-label">Confrimar contraseña</label>
            <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('InputConfPassword','confeyepassword')">
                        <i id="confeyepassword" class="fa-regular fa-eye changePassword"></i>
                    </button>
            </div>
            <input type="password" class="form-control" id="InputConfPassword">
        </div>


        <div class="mb-3">
            <label for="InputInvEmail" class="form-label">Invitacion</label>
            <input type="email" class="form-control" id="InputInvEmail" aria-describedby="emailHelp">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>
        <div class="login-parts mt-3">
            ¿Ya estas registrado? <a href="signup.php" style="text-decoration: none;">Inicia sesión aquí</a>
        </div>
    </form>    
</div>


<?php
    require_once("d://xampp/htdocs/WinnerStage/view/head/footer.php");
?> 