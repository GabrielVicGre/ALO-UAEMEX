<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta . "/Controllers/Administrador/inicioControlador.php");
$inicioController = new inicioControlador();
$num_equipos =  $inicioController->getTotalEquipos();
$num_jugadores = $inicioController->getTotalJugadores();
$num_canchas = $inicioController->getTotalCanchas();
$num_grupos = $inicioController->getTotalGrupos();

?>

<div class="container p-0">
    <div class="row">
        <div class="col-lg-8">
            <div class="pt-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Assets/images/Carrucel3.jpg" class="img-fluid d-block w-100" alt="..." style="border-radius: 5px; height: 70vh;">
                        </div>
                        <div class="carousel-item">
                            <img src="Assets/images/Carrucel2.jpg" class="img-fluid d-block w-100" alt="..." style="border-radius: 5px; height: 70vh;">
                        </div>
                        <div class="carousel-item">
                            <img src="Assets/images/Carrucel1.jpg" class="img-fluid d-block w-100" alt="..." style="border-radius: 5px; height: 70vh;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="pt-2" >
                <div class="card text-center" style="height: 70vh !important;">
                    <div class="card-header" style="background-color: #17a589;">
                        <spam class="card-title h5" style="color: #fff;">Status actual</spam>
                    </div>
                    <div class="card-body" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%;">
                        <div class="container">
                            <div class="row">

                                <div class="col-6 col-lg-6">
                                    <div class="card mt-2" style="background-color:#E8F6F3;">
                                        <div class="card-header text-muted h6">Equipos</div>
                                        <div class="card-body">
                                            <h2 class="card-title"></h2>
                                            <div class="pb-3">
                                                <img style="width: 50%;" src="https://cdn-icons-png.flaticon.com/512/4341/4341586.png" class="img-fluid" alt="...">
                                            </div>
                                            <a href="Views/Invitado/equipos/index.php" class="totales">
                                                <b class="h5"> <?php echo $num_equipos ?> </b><br>
                                                registros
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <div class="card mt-2" style="background-color:#E8F6F3;">
                                        <div class="card-header text-muted h6">Jugadores</div>
                                        <div class="card-body">
                                            <h2 class="card-title"></h2>
                                            <div class="pb-3">
                                                <img style="width: 50%;" src="https://cdn-icons-png.flaticon.com/512/2348/2348811.png" class="img-fluid" alt="...">
                                            </div>

                                            <a href="Views/Invitado/equipos/index.php" class="totales">
                                                <b class="h5"> <?php echo $num_jugadores ?> </b><br>
                                                registros
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <div class="card mt-2" style="background-color:#E8F6F3;">
                                        <div class="card-header text-muted h6">Canchas</div>
                                        <div class="card-body">
                                            <h2 class="card-title"></h2>
                                            <div class="pb-3">
                                                <img style="width: 50%;" src="https://cdn-icons-png.flaticon.com/512/3461/3461128.png" class="img-fluid" alt="...">
                                            </div>

                                            <a href="Views/Invitado/canchas/index.php" class="totales">
                                                <b class="h5"> <?php echo $num_canchas ?> </b><br>
                                                registros
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <div class="card mt-2" style="background-color:#E8F6F3;">
                                        <div class="card-header text-muted h6">Grupos</div>
                                        <div class="card-body">
                                            <h2 class="card-title"></h2>
                                            <div class="pb-3">
                                                <img style="width: 50%;" src="https://cdn-icons-png.flaticon.com/512/2842/2842558.png" class="img-fluid" alt="...">
                                            </div>
                                            <a href="Views/Invitado/grupos/index.php" class="totales">
                                                <b class="h5"> <?php echo $num_grupos ?> </b><br>
                                                registros
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>