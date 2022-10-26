<main class="auth">
    <div class="login-card">
        <img src="../build/img/logo.svg" alt="logo" class="auth__logo">
        <h2 class="auth__heading"><?= $titulo ?></h2>
        <p class="auth__texto">Tu cuenta <b>Ticket Reserve</b></p>
        <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

        <?php if (isset($alertas['exito'])) { ?>
        <div class="acciones--centrar">
            <a href="/login" class="acciones__enlace">Iniciar sesión</a>
        </div>
        <?php } ?>
    </div>
</main> 