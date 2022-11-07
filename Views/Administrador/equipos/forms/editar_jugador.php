<?php
$jugador =  $jugController->getDatosJugadorById($_GET['id_jugador']);
?>

<h6 class="pb-4 text-center">Modifica Jugador</h6>
<form action="Views/Administrador/equipos/integrantes.php" method="POST" autocomplete="FALSE">
    <div class="mb-3">
        <input type="hidden" name="id_jugador" value="<?php echo $_GET['id_jugador']; ?>">

        <label for="nombre" class="form-label">Nombre: </label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $jugador->nombre; ?> ">

        <label for="edad" class="form-label mt-4">Descripción: </label>
        <input type="text" name="edad" class="form-control" id="edad" value="<?php echo $jugador->edad; ?> ">

        <label for="es_capitan" class="form-label mt-4">Capitan:</label>
        <input type="text" name="es_capitan" class="form-control" id="es_capitan" value="<?php echo $jugador->es_capitan ?>">
    </div>
    <div class="mt-4">
        <input type="submit" style="background-color:#C5A42A" class="btn btn-sm text-white" name="update" value="Guardar">
        <button class="btn btn-sm text-white" style="background-color:#AB944C" type="submit" name="action" value="cancel">Cancelar</button>
    </div>

</form>