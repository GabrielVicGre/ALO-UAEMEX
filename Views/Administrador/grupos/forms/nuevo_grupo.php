<?php
$equipos = $equiController->listaEquipos();
$grupoequipo = $grupoController->getGrupoEquipo();

?>

<div class="card">
    <div class="card-header text-center">
        <spam class="h6 text-muted">Registro de grupos</spam>
    </div>
    <div class="card-body">
        <form action="Views/Administrador/grupos/index.php" method="POST" autocomplete="FALSE">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required> <br>

            <label class="form-label">¿Qué equipos deseas agregar a este grupo?</label> <br>
            <?php
            foreach ($equipos as $reg) {
                $bandera = false;
                foreach ($grupoequipo as $aux) {
                    if ($aux->id_equipo == $reg->id_equipo) {
                        $bandera = true;
                    }
                }

                if ($bandera == true) {
            ?>
                    <div class="form-check">
                    <input class="form-check-input" name="equipos[]" type="checkbox" value="<?php echo $reg->id_equipo ?>" id="<?php echo $reg->id_equipo ?>" disabled>
                <?php
                } else {
                ?>  
                    <div class="form-check">
                    <input class="form-check-input" name="equipos[]" type="checkbox" value="<?php echo $reg->id_equipo ?>" id="<?php echo $reg->id_equipo ?>">
            <?php
                }
                ?>
                <label class="form-check-label" for="<?php echo $reg->id_equipo ?>"><?php echo $reg->nombre ?> </label> <br>                
                </div>

            <?php
            }
            ?>

            <div class="text-center">
                <button type="submit" name="add" value="Guardar" style="background-color:#C5A42A" class="btn  text-white btn-sm mt-2">Guardar</button>
            </div>
        </form>
    </div>
</div>