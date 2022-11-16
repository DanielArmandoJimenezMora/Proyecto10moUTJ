<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/restaurantes/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Restaurante
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if (!empty($restaurantes)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Restaurante</th>
                    <th scope="col" class="table__th">Domicilio</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>
            <tbody class="table__tbody">
                <?php foreach ($restaurantes as $restaurante) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $restaurante->nombre .
                                ' / ' .
                                $restaurante->sucursal; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $restaurante->domicilio; ?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/restaurantes/editar?id=<?php echo $restaurante->id; ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Editar
                        </a>

                        <form method="POST" action="/admin/restaurantes/eliminar" class="table__formulario">
                            <input type="hidden" name="id" value="<?php echo $restaurante->id; ?>">
                            <button type="submit" class="table__accion table__accion--eliminar">
                                <i class="fa-solid fa-trash"></i>
                                Eliminar
                            </button>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <img class="dashboard__noData" src="../build/img/noData.gif" alt="No hay datos">
        <p class="text-center">No hay restaurantes registrados aún</p>
    <?php } ?>
</div>