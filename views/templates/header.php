<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">

        <?php if (is_auth()) { ?>
            <a href="<?php echo is_admin()
                ? '/admin/dashboard'
                : '/finalizar-registro'; ?>" class="header__enlace">Administrar</a>
            <form method="POST" action="/logout" class="header__form">
                <input type="submit" value="Cerrar Sesión" class="header__submit">
            </form>
        <?php } else { ?>
            <a href="/registro" class="header__enlace">Registro</a>
            <a href="/login" class="header__enlace">Iniciar Sesión</a>
        <?php } ?>
        </nav>
        <div class="header__contenido">
            <a href="/">
                <!-- <img src="../build/img/logo.svg" alt="logo" class="header__logo--img"> -->
                <div>
                    <h1 class="header__logo">
                        Ticket Reserve
                    </h1>
                </div>
            </a>
            <p class="header__texto">31 de Diciembre de 2022</p>
            <p class="header__texto header__texto--modalidad">Cena de fin de año</p>

            <a href="/registro" class="header__boton">Comprar pase</a>
        </div>
    </div>
</header>

<div class="barra">
    <div class="barra__contenido">
        <a href="">
            <h2 class="barra__logo" >Ticket Reserve</h2>
        </a>
        <div class="navegacion">
            <a href="/ticketreserve" class="navegacion__enlace <?php echo pagina_actual(
                '/ticketreserve'
            )
                ? 'navegacion__enlace--actual'
                : ''; ?>">Evento</a>
            <a href="/paquetes" class="navegacion__enlace <?php echo pagina_actual(
                '/paquetes'
            )
                ? 'navegacion__enlace--actual'
                : ''; ?>">Paquetes</a>
            <a href="/restaurantes" class="navegacion__enlace <?php echo pagina_actual(
                '/restaurantes'
            )
                ? 'navegacion__enlace--actual'
                : ''; ?>">Restaurantes</a>
            <a href="/registro" class="navegacion__enlace <?php echo pagina_actual(
                '/registro'
            )
                ? 'navegacion__enlace--actual'
                : ''; ?>">Comprar Pase</a>
        </div>
    </div>
</div>