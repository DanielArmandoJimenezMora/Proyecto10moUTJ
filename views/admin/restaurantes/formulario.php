<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Restaurante</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label"><span class="formulario__obligatorio">* </span>Nombre del restaurante</label>
        <input 
            type="text" 
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre del restaurante"
            value="<?php echo $restaurante->nombre ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="sucursal" class="formulario__label"><span class="formulario__obligatorio">* </span>Sucursal</label>
        <input 
            type="text" 
            class="formulario__input"
            id="sucursal"
            name="sucursal"
            placeholder="Sucursal"
            value="<?php echo $restaurante->sucursal ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="domicilio" class="formulario__label"><span class="formulario__obligatorio">* </span>Domicilio</label>
        <input 
            type="text" 
            class="formulario__input"
            id="domicilio"
            name="domicilio"
            placeholder="Domicilio"
            value="<?php echo $restaurante->domicilio ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label"><span class="formulario__obligatorio">* </span>Imagen</label>
        <input 
            type="file" 
            class="formulario__input formulario__input--file"
            id="imagen"
            name="imagen"
        >
    </div>

    <?php if (isset($restaurante->imagen_actual)) { ?>
         <p class="formulario__texto">Imagen Actual:</p>
         <div class="formulario__imagen">
            <picture>
                <source src="<?php echo $_ENV['HOST'] .
                    '/img/restaurantes/' .
                    $restaurante->imagen; ?>.webp" type="image/webp">
                <source src="<?php echo $_ENV['HOST'] .
                    '/img/restaurantes/' .
                    $restaurante->imagen; ?>.png" type="image/png">
                    <img src="<?php echo $_ENV['HOST'] .
                        '/img/restaurantes/' .
                        $restaurante->imagen; ?>.png" alt="restaurante">
            </picture>
         </div>
    <?php } ?>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información adicional</legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label"><span class="formulario__obligatorio">* </span>Especialidades<span class="formulario__label--ayuda"> [Agregar presionando tecla de coma (,)]</span></label>
        <input 
            type="text" 
            class="formulario__input"
            id="tags__input"
            placeholder="Ejemplo: Italiano, Pasta, Pizza, Cortes, Ensaladas, etc"
        >
    </div>

    <div id="tags" class="formulario__listado"></div>
    <input type="hidden" name="tags" value="<?php echo $restaurante->tags ??
        ''; ?>" >

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input 
                type="text" 
                class="formulario__input--sociales"
                name="redes[facebook]"
                placeholder="Facebook"
                value="<?php echo $redes->facebook ?? ''; ?>"
            >
       </div>
    </div>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input 
                type="text" 
                class="formulario__input--sociales"
                name="redes[twitter]"
                placeholder="Twitter"
                value="<?php echo $redes->twitter ?? ''; ?>"
            >
       </div>
    </div>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input 
                type="text" 
                class="formulario__input--sociales"
                name="redes[youtube]"
                placeholder="YouTube"
                value="<?php echo $redes->youtube ?? ''; ?>"
            >
       </div>
    </div>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input 
                type="text" 
                class="formulario__input--sociales"
                name="redes[instagram]"
                placeholder="Instagram"
                value="<?php echo $redes->instagram ?? ''; ?>"
            >
       </div>
    </div>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <input 
                type="text" 
                class="formulario__input--sociales"
                name="redes[tiktok]"
                placeholder="Tiktok"
                value="<?php echo $redes->tiktok ?? ''; ?>"
            >
       </div>
    </div>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-solid fa-globe"></i>
            </div>
            <input 
                type="text" 
                class="formulario__input--sociales"
                name="redes[web]"
                placeholder="Web"
                value="<?php echo $redes->web ?? ''; ?>"
            >
       </div>
    </div>

</fieldset>