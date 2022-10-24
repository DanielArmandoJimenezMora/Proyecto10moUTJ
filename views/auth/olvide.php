<main class="auth">
    <img src="../build/img/logo.svg" alt="logo" class="auth__logo">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recuperar acceso a tu cuenta de <b>Ticket Reserve</b></p>

    <form class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                    type="text"
                    class="formulario__input"
                    placeholder="Tu Email"
                    id="email"
                    name="email"
                >
        </div>

        <input type="submit" class="formulario__submit" value="Enviar instrucciones">

    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
    </div>

</main>