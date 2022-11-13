<?php
$cancha = $canchasController->getDatosCanchaById($_GET['id_cancha']);

?>

<div class="card">
    <div class="card-header text-center">
        <spam class="h6 text-muted">Edita registro de cancha</spam>
    </div>
    <div class="card-body">
        <form action="Views/Administrador/canchas/index.php" method="POST" autocomplete="FALSE">
            <input type="hidden" name="id_cancha" class="form-control" 
            value="<?php echo $cancha->id_cancha ?>"> 

            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $cancha->nombre ?>" id="nombre" required> <br>

            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $cancha->direccion ?>" id="direccion" required> <br>

            <label for="url" class="form-label">Url:</label>
            <input type="text" name="url" class="form-control" value="<?php echo $cancha->url ?>" id="url" required> <br>

            <div class="mt-3 text-center">
                <input type="submit" style="background-color:#C5A42A" class="btn btn-sm text-white" name="update" value="Guardar">
                <button class="btn btn-sm text-white" style="background-color:#AB944C" type="submit" name="action" value="cancel">Cancelar</button>
            </div>

        </form>
    </div>
</div>