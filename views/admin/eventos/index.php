<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/eventos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Evento
    </a>
</div>


<div class="dashboard__contenedor">
    <?php if (!empty($eventos)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Evento</th>
                    <th scope="col" class="table__th">Tipo de evento</th>
                    <th scope="col" class="table__th">Día y Hora</th>
                    <th scope="col" class="table__th">Restaurante</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>
            <tbody class="table__tbody">
                <?php foreach ($eventos as $evento) { ?>
                    <tr class="table__tr">

                        <td class="table__td">
                            <?php echo $evento->nombre; ?>
                        </td>

                        <td class="table__td">
                            <?php echo $evento->categoria->nombre; ?>
                        </td>

                        <td class="table__td">
                            <?php echo $evento->dia->nombre .
                                ' - ' .
                                $evento->hora->hora; ?>
                        </td>

                        <td class="table__td">
                            <?php echo $evento->restaurante->nombre .
                                ' / ' .
                                $evento->restaurante->sucursal; ?>
                        </td>

                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/eventos/editar?id=<?php echo $evento->id; ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Editar
                        </a>

                        <form method="POST" action="/admin/eventos/eliminar" class="table__formulario">
                            <input type="hidden" name="id" value="<?php echo $evento->id; ?>">
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
        <p class="text-center">No hay eventos registrados aún</p>
    <?php } ?>
</div>

<?php echo $paginacion;
?>
