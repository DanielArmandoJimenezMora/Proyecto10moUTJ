<main class="agenda">
    <h2 class="agenda__heading">Restaurantes y sucursales</h2>
    <p class="agenda__descripcion">Elige en lugar en dónde te guastaría cenar y celebrar año nuevo.</p>
    <div class="eventos">
        <h3 class="eventos__heading">Restaurantes</h3>
        <p class="eventos__fecha">Sábado 31 de octubre de 2022</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos as $evento) { ?>
                <div class="evento swiper-slide">
                    <p class="evento__hora"><?php echo $evento->hora
                        ->hora; ?></p>
                        <div class="evento__informacion">
                            <h4 class="evento__nombre"><?php echo $evento->nombre; ?></h4>
                            
                            <p class="evento__introduccion"><?php echo $evento->descripcion; ?></p>
                            
                            <div class="evento__restaurante-info">
                                <picture>
                                    <img class="evento__imagen-restaurante" loading="lazy" width="200" height="300" src="<?php echo $_ENV[
                                        'HOST'
                                    ] .
                                        '/img/restaurantes/' .
                                        $evento->restaurante
                                            ->imagen; ?>.png" alt="Imagen restaurante">
                                </picture>
                                <p class="evento__restaurante-nombre">
                                    <?php echo $evento->restaurante->nombre .
                                        ' / ' .
                                        $evento->restaurante->sucursal; ?>
                                </p>
                            </div>
                        </div>
                </div>
            <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</main>