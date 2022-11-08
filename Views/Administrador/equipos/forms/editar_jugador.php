<?php
$jugador =  $jugController->getDatosJugadorById($_GET['id_jugador']);
$licenciaturas = $jugController->getLicenciaturas();

?>

<form action="Views/Administrador/equipos/integrantes.php?id_equipo=<?php echo $_GET['id_equipo'];?>" method="POST" autocomplete="FALSE">
    <div class="container">
        <div class="row">
            <input type="hidden" name="id_jugador" value="<?php echo $_GET['id_jugador']; ?>">
            <input type="hidden" name="id_equipo" value="<?php echo $_GET['id_equipo']; ?>">

            <div class="col-12 col-lg-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $jugador->nombre; ?> ">
            </div>

            <div class="col-12 col-lg-2">
                <label for="edad" class="form-label ">Edad </label>
                <input type="number" name="edad" class="form-control" id="edad" value="<?php echo $jugador->edad; ?>">
            </div>

            <div class="col-12 col-lg-2">
                <label for="es_capitan" class="form-label">¿Es capitán?</label>
                <select name="es_capitan" id="es_capitan" class="form-select" aria-label="Default select example">
                    <option disabled>Opciones</option>
                    <option <?php echo $jugador->es_capitan == 'SI' ? 'selected ' : ' '; ?> value="SI">SI</option>
                    <option <?php echo $jugador->es_capitan == 'NO' ? 'selected ' : ' '; ?> value="NO">NO</option>
                </select>
            </div>

            <div class="col-12 col-lg-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" name="correo" class="form-control" id="correo" value="<?php echo $jugador->correo; ?>">
            </div>

            <div class="col-12 col-lg-2">
                <label for="id_licenciatura" class="form-label">Licenciatura</label>
                <select name="id_licenciatura" id="id_licenciatura" class="form-select">
                    <option disabled>Opciones</option>
                    <?php
                    foreach ($licenciaturas as $reg) {
                    ?>
                        <option <?php echo $reg->id_licenciatura == $_GET['id_licenciatura'] ? " selected " : " " ?> value="<?php echo $reg->id_licenciatura; ?>"> <?php echo $reg->nombre; ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

        </div>
        <div class="text-center mt-2">
            <input type="submit" style="background-color:#C5A42A" class="btn btn-sm text-white" name="update" value="Guardar">
            <button class="btn btn-sm text-white" style="background-color:#AB944C" type="submit" name="action" value="cancel">Cancelar</button>
        </div>
    </div>
</form>