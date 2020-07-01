<div class="container">
    <!-- Login form -->
    <div class="loginForm">
        <form name="loginform" class="form-login" method="post">
            <h3>!Bienvenido nuevamente!</h3>
            <hr>
            <div class="input-group mb-1">
                <div class="input-group-append">
                    <span class="input-group-text"> <i class="fa fa-user"
                                                       aria-hidden="true"></i></span>
                </div>
                <input type="text" name="username" id="username"
                       placeholder="Usuario" class="form-control" autocomplete="off"
                       required autofocus>
            </div>
            <div class="input-group mb-1">
                <div class="input-group-append">
                    <span class="input-group-text"> <i class="fa fa-key"
                                                       aria-hidden="true"></i></span>
                </div>
                <input type="password" name="password" id="password"
                       placeholder="Clave" class="form-control" autocomplete="off"
                       required>
            </div>
            <div class="input-group mb-1">
                <div class="input-group-append">
                    <span class="input-group-text"> <i class="fa fa-cog"
                                                       aria-hidden="true"></i></span>
                </div>
                <input type="password" name="userpin" id="userpin" placeholder="PIN"
                       class=" form-control" autocomplete="off" required>
            </div>
            <hr>
            <!-- forgot-password -->
            <div class="form-group">				
                <div class="forgot-password">
                    <a href="forgot-password.php">¿Olvidaste tu contraseña?</a>  /  <a href="forgot-pin.php">¿Olvidaste tu PIN?</a>
                </div>
            </div>
            <!-- If there is an error it will be shown. --> 
            <?php if (!empty($_SESSION['ErrorMessage'])) { ?>
                <div class="alert alert-danger alert-container" id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['ErrorMessage']) ?></center></strong>
                    <?php unset($_SESSION['ErrorMessage']); ?>
                </div>
            <?php } ?>
            <?php if (!empty($_SESSION['SuccessMessage'])) { ?>
                <div class="alert alert-success alert-container" id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['SuccessMessage']) ?></center></strong>
                    <?php unset($_SESSION['SuccessMessage']); ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <input type="submit" name="login" value="Ingresar"
                       class="btn btn-lg btn-block submit" />
            </div>
        </form>
    </div>
    <!-- End Login Form-->

    <!-- URL to registration form -->
    <div class="cnt">
        <a href="register.php">¿No tengo una cuenta? Crear una</a>
    </div>

    <!-- Back to main page -->
    <div class="cnt gray">
        <a href="index.php">Retornar al inicio</a>
    </div>
</div>
<!-- End div -->