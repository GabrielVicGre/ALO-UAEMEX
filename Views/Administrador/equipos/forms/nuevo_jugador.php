<?php
$licenciaturas = $jugController->getLicenciaturas();
?>


<form action="Views/Administrador/equipos/integrantes.php?id_equipo=<?php echo $_GET['id_equipo']?>" method="POST" autocomplete="FALSE">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre">
            </div>
            <div class="col-1">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" min="15" max="40" name="edad" class="form-control" id="edad">
            </div>
            <div class="col-2">
                <label for="es_capitan" class="form-label">Capitan:</label>
                <select name="es_capitan" id="es_capitan" class="form-select" aria-label="Default select example">
                    <option selected disabled>Opciones</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="col-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" name="correo" class="form-control" id="correo">
            </div>
            <div class="col-2">
                <label for="id_licenciatura" class="form-label">Licenciatura</label>
                <select name="id_licenciatura" id="id_licenciatura" class="form-select" aria-label="Default select example">
                    <option selected disabled>Opciones</option>
                    <?php
                    foreach ($licenciaturas as $reg) {
                        echo '<option value="'.$reg->id_licenciatura.'">'.$reg->nombre.'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <input type="hidden" name="id_equipo" value="<?php echo $_GET['id_equipo'] ?>">
        <button type="submit" name="add" value="Guardar" style="background-color:#C5A42A" class="btn text-white btn-sm mt-2">Guardar</button>
    </div>
</form>