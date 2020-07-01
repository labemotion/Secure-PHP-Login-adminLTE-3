<?php 
    if (!empty($_GET['email']) && !empty($_GET['key']) && !empty($_GET['hash'])) {
    ?>
    <div class="container">
        <?php if (!empty($_SESSION['ErrorMessage'])) { ?>
            <div class="alert alert-danger alert-container" id="alert">
                <strong><?php echo htmlentities($_SESSION['ErrorMessage']) ?></strong>
                <?php unset($_SESSION['ErrorMessage']); ?>
            </div>
        <?php } ?>
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