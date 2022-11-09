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
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información adicional</legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Especialidades<span class="formulario__label--ayuda"> [Agregar presionando tecla de coma (,)]</span></label>
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
                value="<?php echo $restaurante->facebook ?? ''; ?>"
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
                value="<?php echo $restaurante->twitter ?? ''; ?>"
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
                value="<?php echo $restaurante->youtube ?? ''; ?>"
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
                value="<?php echo $restaurante->instagram ?? ''; ?>"
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
                value="<?php echo $restaurante->tiktok ?? ''; ?>"
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
                value="<?php echo $restaurante->web ?? ''; ?>"
            >
       </div>
    </div>

</fieldset>