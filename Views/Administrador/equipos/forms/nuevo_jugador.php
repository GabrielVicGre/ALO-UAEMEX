<?php
$licenciaturas = $jugController->getLicenciaturas();
?>

<form action="Views/Administrador/equipos/integrantes.php?id_equipo=<?php echo $_GET['id_equipo'] ?>" method="POST" autocomplete="FALSE">
    <div class="card">
        <div class="card-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-9 col-lg-11 text-lg-center fw-bold text-sm-start text-muted">
                        <span style="font-size: 15px;" class="text-bold">Registro de Jugadores</span>
                    </div>
                    <div class="col-3 col-lg-1 text-end">
                        <button type="submit" name="add" value="Guardar" style="font-size:14px; border:none; background-color:#C5A42A" class="rounded-3 text-white">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0 mt-3 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input required type="text" name="nombre" placeholder="Ingresa tu nombre" class="form-control" id="nombre">
                    </div>
                    <div class="col-12 col-lg-2">
                        <label for="edad" class="form-label">Edad</label>
                        <input required type="number" min="15" max="40" placeholder="Ingresa tu edad" name="edad" class="form-control" id="edad">
                    </div>
                    <div class="col-12 col-lg-2">
                        <label for="es_capitan" class="form-label">¿Es capitán?</label>
                        <select name="es_capitan" id="es_capitan" class="form-select" required>
                            <option value="" selected disabled>Opciones</option>
                            <option value="NO">NO</option>
                            <option value="SI">SI</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input required type="text" name="correo" placeholder="Ingresa tu correo" class="form-control" id="correo">
                    </div>
                    <div class="col-12 col-lg-2">
                        <label for="id_licenciatura" class="form-label">Licenciatura</label>
                        <select name="id_licenciatura" id="id_licenciatura" class="form-select" required>
                            <option value="" selected disabled>Opciones</option>
                            <?php
                            foreach ($licenciaturas as $reg) {
                                echo '<option value="' . $reg->id_licenciatura . '">' . $reg->nombre . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="id_equipo" value="<?php echo $_GET['id_equipo'] ?>">
            </div>
        </div>
    </div>
</form>