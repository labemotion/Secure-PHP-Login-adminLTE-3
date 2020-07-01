
<div class="container">
    <!-- Forgot password form -->
    <div class="forgotpassword-Form">
        <form action="forgot-password.php" name="forgotpassword-Form"
              class="form-forgot" method="post">
            <h3 class="cnt">¿Olvidaste tu contraseña?</h3>
            <hr class="colorgraph">

            <p class="">Introduce tu correo electrónico. Le enviaremos
                instrucciones por correo electrónico sobre cómo restablecer su
                contraseña.</p>

            <label for="email">Correo electronico<span class="red">*</span>:
            </label> <input type="email" name="email" id="email"
                            placeholder="E-mail" class="input form-control" autocomplete="off"
                            required autofocus><br>

            <!-- If there is an error it will be shown. --> 
<?php if (!empty($_SESSION['ErrorMessage'])): ?>
                <div class="alert alert-danger alert-container"
                     id="alert">
                    <strong><?php echo htmlentities($_SESSION['ErrorMessage']) ?></strong>
                <?php unset($_SESSION['ErrorMessage']); ?>
                </div>
            <?php endif; ?>
            <!-- If e-mail has been sent. -->
<?php if (!empty($_SESSION['SuccessMessage'])): ?>
                <div class="alert alert-success alert-container"
                     id="alert">
                    <strong><?php echo htmlentities($_SESSION['SuccessMessage']) ?></strong>
                <?php unset($_SESSION['SuccessMessage']); ?>
                </div>
<?php endif; ?>

            <input type="submit" name="forgotPassword"
                   value="Enviar e-mail" class="btn btn-lg btn-block submit" />

        </form>

    </div>
    <!-- End Forgot password Form-->

</div>
