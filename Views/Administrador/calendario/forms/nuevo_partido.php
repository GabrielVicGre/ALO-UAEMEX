<?php
$equipos = $equiController->listaEquipos();
$canchas = $canchasController->listaCanchas();
?>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span>Registro de partidos</span>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="mt-2">
                <form action="Views/Administrador/canchas/index.php" method="POST" autocomplete="FALSE">
                    <div class="container m-1">
                        <div class="row">
                            <div class="col-3 ">
                                <label for="id_eq_local" class="form-label">Selecciona 1er equipo:</label>
                                <select name="id_eq_local" id="id_eq_local" class="form-select" required>
                                    <option value="" selected disabled>Opciones</option>
                                    <?php
                                    foreach ($equipos as $reg) {
                                        echo '<option value="' . $reg->id_equipo . '">' . $reg->nombre . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="id_eq_visitante" class="form-label">Selecciona 2do equipo:</label>
                                <select name="id_eq_visitante" id="id_eq_visitante" class="form-select" required>
                                    <option value="" selected disabled>Opciones</option>
                                    <?php
                                    foreach ($equipos as $reg2) {
                                        echo '<option value="' . $reg2->id_equipo . '">' . $reg2->nombre . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="no_jornada" class="form-label">No. Jornada:</label>
                                <input type="number" name="no_jornada" class="form-control input-sm" id="no_jornada" required> <br>
                            </div>
                            <div class="col-2">
                                <label for="fecha" class="form-label">Fecha:</label>
                                <input type="date" name="fecha" class="form-control" id="fecha" required> <br>
                            </div>
                            <div class="col-2">
                                <label for="hora" class="form-label">Hora:</label>
                                <input type="time" name="hora" class="form-control" id="hora" required> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="id_eq_local" class="form-label">Cancha:</label>
                                <select name="id_eq_local" id="id_eq_local" class="form-select" required>
                                    <option value="" selected disabled>Opciones</option>
                                    <?php
                                    foreach ($canchas as $reg3) {
                                        echo '<option value="' . $reg3->id_cancha . '">' . $reg3->nombre . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-5">
                                <label for="descripcion" class="form-label">Descripción:</label>
                                <input type="text" name="descripcion" class="form-control" id="descripcion" required> <br>
                            </div>
                            <div class="col-2">
                                <label for="goles_local" class="form-label">GE1</label>
                                <input type="number" name="goles_local" class="form-control" id="goles_local" required> <br>
                            </div>
                            <div class="col-2">
                                <label for="goles_visitante" class="form-label">GE3</label>
                                <input type="number" name="goles_visitante" class="form-control" id="goles_visitante" required> <br>
                            </div>
                        </div>
                        <div class="text-center pb-2">
                            <button type="submit" name="add" value="Guardar" style="background-color:#C5A42A" class="btn  text-white btn-sm">Guardar partido</button>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>
</div>