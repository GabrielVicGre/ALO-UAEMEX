<?php
$partido = $partidoController->getDatosPartidoById($_GET['id_partido']);

$equipos = $equiController->listaEquipos();
$canchas = $canchasController->listaCanchas();
?>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span>Cambios partido</span>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="mt-3">
                <form action="Views/Administrador/calendario/index.php" method="POST" autocomplete="FALSE">
                    <div class="container m-1">
                        <div class="row">
                            <input type="hidden" value="<?php echo $partido->id_partido; ?>" name="id_partido">
                            <div class="col-12 col-lg-3 ">
                                <label for="id_eq_local" class="form-label">Selecciona 1er equipo(Local):</label>
                                <select required name="id_eq_local" id="id_eq_local" class="form-select">
                                    <option value="" disabled>Opciones</option>
                                    <?php
                                    foreach ($equipos as $reg) {
                                    ?>
                                        <option <?php echo $reg->id_equipo == $partido->id_eq_local ? " selected " : " " ?> value="<?php echo $reg->id_equipo; ?>"> <?php echo $reg->nombre; ?> </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="id_eq_visitante" class="form-label">Selecciona 2do equipo(Visitante):</label>
                                <select required name="id_eq_visitante" id="id_eq_visitante" class="form-select">
                                    <option value="" disabled>Opciones</option>
                                    <?php
                                    foreach ($equipos as $reg) {
                                    ?>
                                        <option <?php echo $reg->id_equipo == $partido->id_eq_visitante ? " selected " : " " ?> value="<?php echo $reg->id_equipo; ?>"> <?php echo $reg->nombre; ?> </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-lg-2">
                                <label for="no_jornada" class="form-label">No. Jornada:</label>
                                <input type="number" value="<?php echo $partido->no_jornada; ?>" min="0" max="15" name="no_jornada" class="form-control input-sm" id="no_jornada" required> <br>
                            </div>
                            <div class="col-6 col-lg-2">
                                <label for="fecha" class="form-label">Fecha:</label>
                                <input type="date" value="<?php echo $partido->fecha; ?>" name="fecha" class="form-control" id="fecha" required> <br>
                            </div>
                            <div class="col-6 col-lg-2">
                                <label for="hora" class="form-label">Hora:</label>
                                <input type="time" value="<?php echo $partido->hora; ?>" name="hora" class="form-control" id="hora" required> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-3">

                                <label for="id_cancha" class="form-label">Cancha:</label>
                                <select required name="id_cancha" id="id_cancha" class="form-select">
                                    <option value="" disabled>Opciones</option>
                                    <?php
                                    foreach ($canchas as $reg) {
                                    ?>
                                        <option <?php echo $reg->id_cancha == $partido->id_cancha ? " selected " : " " ?> value="<?php echo $reg->id_cancha; ?>"> <?php echo $reg->nombre; ?> </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-lg-5">
                                <label for="descripcion" class="form-label">Descripción:</label>
                                <input type="text" value="<?php echo $partido->descripcion; ?>" name="descripcion" class="form-control" id="descripcion" required> <br>
                            </div>
                            <div class="col-6 col-lg-2">
                                <label for="goles_local" class="form-label">Goles Eq. local:</label>
                                <input type="number" name="goles_local" value="<?php echo $partido->goles_local; ?>" class="form-control" id="goles_local" required> <br>
                            </div>
                            <div class="col-6 col-lg-2">
                                <label for="goles_visitante" class="form-label">Goles eq. visitante:</label>
                                <input type="number" name="goles_visitante" value="<?php echo $partido->goles_visitante; ?>" class="form-control" id="goles_visitante" required> <br>
                            </div>
                        </div>
                        <div class="text-center mt-0 mb-2">
                            <input type="submit" style="background-color:#C5A42A" class="btn btn-sm text-white" name="update" value="Guardar">
                            <button class="btn btn-sm text-white" style="background-color:#AB944C" type="submit" name="action" value="cancel">Cancelar</button>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>
</div>