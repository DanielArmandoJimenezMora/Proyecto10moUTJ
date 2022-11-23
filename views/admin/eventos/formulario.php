<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label"><span class="formulario__obligatorio">* </span>Nombre del evento</label>
        <input 
            type="text" 
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre del evento"
            value="<?php echo $evento->nombre; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label"><span class="formulario__obligatorio">* </span>Descripción</label>
        <textarea 
            class="formulario__input"
            id="descripcion"
            name="descripcion"
            placeholder="Descripción del evento"
            rows="8"
        ><?php echo $evento->descripcion; ?></textarea>
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label"><span class="formulario__obligatorio">* </span>Categoría / Tipo de evento</label>
        <select 
            class="formulario__select" 
            id="categoria"
            name="categoria_id"> 
            <option value="">--- Seleccionar ---</option>
            <?php foreach ($categorias as $categoria) { ?>
                <option <?php echo $evento->categoria_id === $categoria->id
                    ? 'selected'
                    : ''; ?>  value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label"><span class="formulario__obligatorio">* </span>Seleccione el día del evento</label>
        <div class="formulario__radio">
            <?php foreach ($dias as $dia) { ?>
                <div>
                    <!-- <input 
                        type="radio"
                        id="<?php echo strtolower($dia->nombre); ?>"
                        name="dia"
                        value="<?php echo $dia->id; ?>"
                        <?php echo $evento->dia_id === $dia->id
                            ? 'checked'
                            : ''; ?>
                        > -->
                        <input 
                        type="radio"
                        id="<?php echo strtolower($dia->nombre); ?>"
                        name="dia"
                        value="<?php echo $dia->id; ?>"
                        <?php echo $evento->dia_id === $dia->id
                            ? 'checked'
                            : ''; ?>
                        >
                        <label for="<?php echo strtolower(
                            $dia->nombre
                        ); ?>"><?php echo $dia->nombre; ?></label>
                </div>
            <?php } ?>
        </div>
        <input type="hidden" name="dia_id" value="<?php echo $evento->dia_id; ?>" />
    </div>

    <div id="horas" class="formulario__campo">
        <label for="" class="formulario__label">Seleccionar Hora</label>

        <ul id="horas" class="horas">
            <?php foreach ($horas as $hora) { ?>
                <li data-hora-id="<?php echo $hora->id; ?>" class="horas__hora horas__hora--deshabilitada"><?php echo $hora->hora; ?></li>
            <?php } ?>
        </ul>
        <input type="hidden" name="hora_id" value="">
    </div>

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="restaurantes" class="formulario__label"><span class="formulario__obligatorio">* </span>Restaurante</label>
        <input 
            type="text" 
            class="formulario__input"
            id="restaurantes"
            placeholder="Buscar Restaurante"
        >
        <ul id="listado-restaurantes" class="listado-restaurantes"></ul>
        <input type="hidden" name="restaurante_id" value="">
    </div>

    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label"><span class="formulario__obligatorio">* </span>Lugares Disponibles</label>
        <input 
            type="number" 
            mim="1"
            class="formulario__input"
            id="disponibles"
            name="disponibles"
            placeholder="Ej. 20"
            value="<?php echo $evento->disponibles; ?>"
        >
    </div>
</fieldset>
