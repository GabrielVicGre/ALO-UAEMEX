<div class="container py-4" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%; border-radius: 5px;">
    <div class="col-12">
        <div class="pt-3">
            <div class="card border-0">
                <div class="card-header text-center fw-bold" style="background-color:#16A085; margin: auto; color: #fff; width: 100%;">
                    <spam class="h6" style="font-size: 20px;">Partidos registrados</spam>
                </div>
                <div class="pt-2 ps-2 px-2 table-responsive">
                    <table id="tabla-equipos" class="align-middle table table-striped table-bordered nowrap" style="width:100%">
                        <thead class="text-white" style="background-color:#16A085;">
                            <th class="text-center"> Encuentro </th>
                            <th class="text-center"> No. Jornada </th>
                            <th class="text-center"> Fecha</th>
                            <th class="text-center"> Hora</th>
                            <th class="text-center"> G. Local</th>
                            <th class="text-center"> G. Visitante</th>
                            <th class="text-center"> Cancha</th>
                            <th class="text-center"> Status</th>
                            <th class="text-center"> Descripción</th>
                        </thead>
                        <tbody>

                            <?php
                            $partidos = $partidoController->listaPartidos();
                            foreach ($partidos as $reg) {
                            ?>
                                <tr>
                                    <form action="Views/Administrador/calendario/index.php" method="GET">
                                        <td class="text-center">
                                            <?php echo $reg->equipo_local ?> <b>VS</b> <?php echo $reg->equipo_visitante ?>
                                        </td>
                                        <td class="text-center"> <?php echo $reg->no_jornada ?> </td>
                                        <td class="text-center"> <?php echo $reg->fecha ?> </td>
                                        <td class="text-center"> <?php echo $reg->hora ?> </td>
                                        <td class="text-center fw-bold">
                                            <?php
                                            if ($reg->status == "por_jugar" && $reg->goles_local == 0) {
                                                echo '---';
                                            } else {
                                                echo $reg->goles_local;
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center fw-bold">
                                            <?php
                                            if ($reg->status == "por_jugar" && $reg->goles_visitante == 0) {
                                                echo '---';
                                            } else {
                                                echo $reg->goles_visitante;
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center"> <?php echo $reg->nombre_cancha ?> </td>
                                        <td class="text-center">
                                            <?php
                                            if ($reg->status == "jugado") {
                                                echo '<span class="badge text-bg-secondary">Jugado</span>';
                                            } elseif ($reg->status == "por_jugar") {
                                                echo '<span class="badge text-bg-success">Por jugar</span>';
                                            } else {
                                                echo '---';
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center"> <?php echo $reg->descripcion ?> </td>


                                    </form>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>