<?php 
    if (!empty($_GET['email']) && !empty($_GET['key']) && !empty($_GET['hash'])) {
    ?>
    <div class="container">
            <div class="row">
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
            </div>
        </div>
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo PATH_SYS; ?>index2.php"><b><?php echo SITE_NAME; ?></b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="newpassword" class="btn btn-primary btn-block">Recover password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="<?php echo PATH_SYS; ?>signin/login.php">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
        <!-- Forgot password form -->
        <div class="forgotpassword-Form">
            <form action="password_reset.php" name="forgotpassword-Form"
                  class="form-forgot" method="post">
                <h3 class="cnt">Inserte nueva clave.</h3>
                <hr class="colorgraph">
                <label for="vemail">Correo electrónico<span class="red">*</span>:</label> 
                <input type="email" name="vemail" id="vemail"
                       placeholder="Confirme su correo electronico" class="input form-control"
                       autocomplete="off" required>                 
                <label for="recoveryphrase">Frase de recuperación<span class="red">*</span>:</label> 
                <input type="text" name="recoveryphrase" id="recoveryphrase"
                       placeholder="Ingrese frase de recuperación" class="input form-control"
                       autocomplete="off" required>
                <hr class="colorgraph">
                <label for="password3">Nueva clave<span class="red">*</span>:</label> 
                <input type="password" name="password3" id="password3"
                       placeholder="Re-enter password" class="input form-control"
                       autocomplete="off" required> 
                <label for="password2">Confirma la clave<span class="red">*</span>:</label> 
                <input type="password" name="password2" id="password2"
                       placeholder="Re-enter password" class="input form-control"
                       autocomplete="off" required><br> 

                <input
                    type="submit" name="updatePassword" value="Update password"
                    class="btn btn-lg btn-block submit" />
            </form>

        </div>
        <!-- End Forgot password form-->
    </div>
    <?php
} else {
    header('Location: index.php');
}
?>