<?php if (isset($_GET['email']) && isset($_GET['key'])) {
    ?>
    <div class="container">
        <?php if (!empty($_SESSION['ErrorMessage'])): ?>
            <div class="alert alert-danger alert-container" id="alert">
                <strong><?php echo htmlentities($_SESSION['ErrorMessage']) ?></strong>
                <?php unset($_SESSION['ErrorMessage']); ?>
            </div>
        <?php endif; ?>
        <!-- Forgot PIN form -->
        <div class="forgotpassword-Form">
            <form action="pin_reset.php" name="forgotpin-Form"
                  class="form-forgot" method="post">
                <h3 class="cnt">Confirme su correo y frase de recuperación.</h3>
                <hr class="colorgraph">
                <label for="vemail">Correo electrónico<span class="red">*</span>:</label> 
                <input type="email" name="vemail" id="vemail"
                       placeholder="Confirme su correo electronico" class="input form-control"
                       autocomplete="off" required> 
                <label for="recoveryphrase">Frase de recuperación<span class="red">*</span>:</label> 
                <input type="text" name="recoveryphrase" id="recoveryphrase"
                       placeholder="Ingrese frase de recuperación" class="input form-control"
                       autocomplete="off" required><br> 
                <input type="text" name="email"
                       value="<?php echo htmlentities($_GET['email']); ?>" hidden> 
                <input
                    type="text" name="key"
                    value="<?php echo htmlentities($_GET['key']); ?>" hidden> 
                <input
                    type="submit" name="updatePIN" value="Actualizar PIN"
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

