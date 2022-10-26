<main class="auth">
    <div class="login-card">
        <img src="../build/img/logo.svg" alt="logo" class="auth__logo">
        <h2 class="auth__heading"><?php echo $titulo; ?></h2>
        <p class="auth__texto">Ingresa tu nueva Contraseña</p>

        <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

        <?php if ($token_valido) { ?>
            <form method="POST" class="formulario">
                <div class="formulario__campo">
                    <label for="password" class="formulario__label">Nueva Contraseña</label>
                    <input 
                        type="password"
                        class="formulario__input"
                        placeholder="Tu nueva contraseña"
                        id="password"
                        name="password"
                    >
                </div>

                <input type="submit" class="formulario__submit" value="Guardar contraseña">

            </form>
        <?php } ?>

        <div class="acciones">
            <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar Sesión</a>
            <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
        </div>
    </div>
</main>