<?php
$num_equipos =  $inicioController->getTotalEquipos();

?>
<div class="card text-center mt-4">
    <div class="card-header">
        <h5 class="card-title text-muted">Status actual</h5>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mb-3" style="background-color:#E8F6F3;">
                        <div class="card-header text-muted h2">Equipos</div>
                        <div class="card-body">
                            <h2 class="card-title"></h2>
                            <div class="p-3">
                                <img style="width: 50%;" src="https://cdn-icons-png.flaticon.com/512/4341/4341586.png" class="img-fluid" alt="...">
                            </div>

                            <a href="Views/Administrador/inicio/index.php" class="totales">
                                <b class="h2"> <?php echo $num_equipos ?> </b><br>
                                Equipos registrados
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="background-color:#E8F6F3;">
                        <div class="card-header text-muted h2">Jugadores</div>
                        <div class="card-body">
                            <h2 class="card-title"></h2>
                            <div class="p-3">
                                <img style="width: 50%;" src="https://cdn-icons-png.flaticon.com/512/2348/2348811.png" class="img-fluid" alt="...">
                            </div>

                            <a href="Views/Administrador/inicio/index.php" class="totales">
                                <b class="h2"> <?php echo $num_equipos ?> </b><br>
                                Jugadores registrados
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="background-color:#E8F6F3;">
                        <div class="card-header text-muted h2">Canchas</div>
                        <div class="card-body">
                            <h2 class="card-title"></h2>
                            <div class="p-3">
                                <img style="width: 50%;" src="https://cdn-icons-png.flaticon.com/512/3461/3461128.png" class="img-fluid" alt="...">
                            </div>

                            <a href="Views/Administrador/inicio/index.php" class="totales">
                                <b class="h2"> <?php echo $num_equipos ?> </b><br>
                                Canchas registrados
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card-footer text-muted">
        Semestre 2022B
    </div>
</div>