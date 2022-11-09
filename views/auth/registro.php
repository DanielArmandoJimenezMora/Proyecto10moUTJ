<main class="auth">
    <div class="login-card">
        <img src="../build/img/logo.svg" alt="logo" class="auth__logo">
        <h2 class="auth__heading"><?php echo $titulo; ?></h2>
        <p class="auth__texto">Regístrate en Ticket Reserve</p>

        <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

        <form method="POST" action="/registro" class="formulario">

            <div class="formulario__campo">
                <label for="nombre" class="formulario__label"><span class="formulario__obligatorio">* </span>Nombre</label>
                <input 
                        type="text"
                        class="formulario__input"
                        placeholder="Nombre"
                        id="nombre"
                        name="nombre"
                        value="<?php echo $usuario->nombre; ?>"
                    >
            </div>

            <div class="formulario__campo">
                <label for="apellido" class="formulario__label"><span class="formulario__obligatorio">* </span>Apellido</label>
                <input 
                        type="text"
                        class="formulario__input"
                        placeholder="Apellido"
                        id="apellido"
                        name="apellido"
                        value="<?php echo $usuario->apellido; ?>"
                    >
            </div>

            <div class="formulario__campo">
                <label for="email" class="formulario__label"><span class="formulario__obligatorio">* </span>Email</label>
                <input 
                        type="email"
                        class="formulario__input"
                        placeholder="Email"
                        id="email"
                        name="email"
                        value="<?php echo $usuario->email; ?>"
                    >
            </div>

            <div class="formulario__campo">
                <label for="password" class="formulario__label"><span class="formulario__obligatorio">* </span>Contraseña</label>
                <input 
                        type="password"
                        class="formulario__input"
                        placeholder="Contraseña"
                        id="password"
                        name="password"
                    >
            </div>

            <div class="formulario__campo">
                <label for="password2" class="formulario__label"><span class="formulario__obligatorio">* </span>Repetir Contraseña</label>
                <input 
                        type="password"
                        class="formulario__input"
                        placeholder="Repetir Contraseña"
                        id="password2"
                        name="password2"
                    >
            </div>

            <input type="submit" class="formulario__submit" value="Crear Cuenta">

        </form>

        <div class="acciones">
            <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</main>