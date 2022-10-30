<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual(
            '/dashboard'
        )
            ? 'dashboard__enlace--actual'
            : ''; ?> ">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">Inicio</span>
        </a>
                <a href="/admin/restaurantes" class="dashboard__enlace <?php echo pagina_actual(
                    '/restaurantes'
                )
                    ? 'dashboard__enlace--actual'
                    : ''; ?> ">
            <i class="fa-solid fa-utensils dashboard__icono"></i>
            <span class="dashboard__menu-texto">Restaurantes</span>
            <span class="dashboard__menu-texto">/sucursales</span>
        </a>
        <a href="/admin/eventos" class="dashboard__enlace <?php echo pagina_actual(
            '/eventos'
        )
            ? 'dashboard__enlace--actual'
            : ''; ?> ">
            <i class="fa-solid fa-calendar-days dashboard__icono"></i>
            <span class="dashboard__menu-texto">Eventos</span>
        </a>
        <a href="/admin/registrados" class="dashboard__enlace <?php echo pagina_actual(
            '/registrados'
        )
            ? 'dashboard__enlace--actual'
            : ''; ?> ">
            <i class="fa-solid fa-users dashboard__icono"></i>
            <span class="dashboard__menu-texto">Registrados</span>
        </a>
        <a href="/admin/paquetes" class="dashboard__enlace <?php echo pagina_actual(
            '/paquetes'
        )
            ? 'dashboard__enlace--actual'
            : ''; ?> ">
            <i class="fa-solid fa-gift dashboard__icono"></i>
            <span class="dashboard__menu-texto">Paquetes</span>
        </a>
    </nav>
</aside>