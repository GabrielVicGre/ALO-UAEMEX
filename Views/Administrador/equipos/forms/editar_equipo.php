<?php
$equipo =  $equiController->getDatosEquipoById($_GET['id_equipo']);
?>

<h6 class="pb-4 text-center">Modifica equipo</h6>
<form action="Views/Administrador/equipos/index.php" method="POST" autocomplete="FALSE">
    <div class="mb-3">
        <input type="hidden" name="id_equipo" value="<?php echo $_GET['id_equipo']; ?>">

        <label for="nombre" class="form-label">Nombre: </label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $equipo->nombre; ?> ">

        <label for="descripcion" class="form-label mt-4">Descripción: </label>
        <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?php echo $equipo->descripcion; ?> ">

        <label for="fecha_registro" class="form-label mt-4">Fecha Registro:</label>
        <input type="date" name="fecha_registro" class="form-control" id="fecha_registro" value="<?php echo $equipo->fecha_registro;?>">
    </div>
    <div class="mt-4">
        <input type="submit" style="background-color:#C5A42A" class="btn btn-sm text-white" name="update" value="Guardar">
        <button class="btn btn-sm text-white" style="background-color:#AB944C" type="submit" name="action" value="cancel">Cancelar</button>
    </div>

</form>