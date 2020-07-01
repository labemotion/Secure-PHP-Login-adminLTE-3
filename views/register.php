<!-- signin-page -->
<div class="container">
    <!-- Registration form -->
    <div class="loginForm">
        <!-- form -->

        <form action="register.php" name="registerform" method="POST"
              class="form-registration">
            <h3>¡Regístrate!</h3>
            <hr>
            <div class="input-group mb-1">
                <div class="input-group-append">
                    <span class="input-group-text"> <i class="fa fa-user"
                                                       aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" name="username"
                       placeholder="Usuario">
            </div>
            <div class="input-group mb-1">
                <div class="input-group-append">
                    <span class="input-group-text"> <i class="fa fa-envelope"
                                                       aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" name="email"
                       placeholder="Correo electronico">
            </div>
            <div class="input-group mb-1">
                <div class="input-group-append">
                    <span class="input-group-text"> <i class="fa fa-key"
                                                       aria-hidden="true"></i></span>
                </div>
                <input type="password" class="form-control" name="password"
                       placeholder="Contraseña">
            </div>
            <div class="input-group mb-1">
                <div class="input-group-append">
                    <span class="input-group-text"> <i class="fa fa-key"
                                                       aria-hidden="true"></i></span>
                </div>
                <input type="password" class="form-control" name="repassword"
                       placeholder="Repite la contraseña">
            </div>

            <hr>
            <!-- forgot-password -->
            <div class="form-group">				
                <div class="forgot-password">
                    <a href="forgot-password.php">¿Olvidaste tu contraseña?</a>  /  <a href="forgot-pin.php">¿Olvidaste tu PIN?</a>
                </div>
            </div>
            <!-- Register form -->
            <!-- If there is an error it will be shown. --> 
            <?php if (!empty($_SESSION['ErrorMessage'])): ?>
                <div class="alert alert-danger alert-container"
                     id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['ErrorMessage']) ?></center></strong>
                    <?php unset($_SESSION['ErrorMessage']); ?>
                </div>
            <?php endif; ?>
            <!-- If user account is created. -->
            <?php if (!empty($_SESSION['SuccessMessage'])): ?>
                <div class="alert alert-success alert-container"
                     id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['SuccessMessage']) ?></center></strong>
                    <?php unset($_SESSION['SuccessMessage']); ?>
                </div>
            <?php endif; ?>
            <button type="submit" name="register" class="btn">Registrarse</button>
        </form>
        <!-- form -->
        <div class="cnt">
            <a href="login.php">Iniciar sesión con cuenta.</a>
        </div>
        <!-- Back to main page -->
        <div class="cnt gray">
            <a href="index.php">Retornar al inicio</a>

            <!-- user-login -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- signin-page -->