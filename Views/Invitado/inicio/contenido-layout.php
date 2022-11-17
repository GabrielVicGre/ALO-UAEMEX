<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta . "/Controllers/Administrador/inicioControlador.php");
$inicioController = new inicioControlador();
$num_equipos =  $inicioController->getTotalEquipos();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <div id="carouselExampleIndicators" class="carousel slide mt-1 mb-4" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img src = "Assets/images/Carrucel3.jpg" class="img-fluid d-block w-100" alt="..." style="border-radius: 5px; height: 74vh;">
                    </div>
                    <div class="carousel-item">
                    <img src = "Assets/images/Carrucel2.jpg" class="img-fluid d-block w-100" alt="..." style="border-radius: 5px; height: 74vh;">
                    </div>
                    <div class="carousel-item">
                    <img src = "Assets/images/Carrucel1.jpg" class="img-fluid d-block w-100" alt="..." style="border-radius: 5px; height: 74vh;">
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

        <div class="col-lg-5">
            <div class="card text-center mt-1">
                <div class="card-header" style="background-color:   #17a589;">
                    <h5 class="card-title pt-2 pb-1" style="color: #fff;">Status actual</h5>
                </div>
                <div class="card-body" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%;">
                    <div class="container">
                        <div class="row mt-3 mb-2">
                            <div class="col-12 col-lg-6">
                                <div class="card mb-3" style="background-color:#E8F6F3;">
                                    <div class="card-header text-muted h4">Equipos</div>
                                    <div class="card-body">
                                        <h2 class="card-title"></h2>
                                        <div class="p-3">
                                            <img style="width: 35%;" src="https://cdn-icons-png.flaticon.com/512/4341/4341586.png" class="img-fluid" alt="...">
                                        </div>
                                        <a href="Views/Administrador/inicio/index.php" class="totales">
                                            <b class="h5"> <?php echo $num_equipos ?> </b><br>
                                            Equipos registrados
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="card mb-3" style="background-color:#E8F6F3;">
                                    <div class="card-header text-muted h4">Jugadores</div>
                                    <div class="card-body">
                                        <h2 class="card-title"></h2>
                                        <div class="p-3">
                                            <img style="width: 35%;" src="https://cdn-icons-png.flaticon.com/512/2348/2348811.png" class="img-fluid" alt="...">
                                        </div>

                                        <a href="Views/Administrador/inicio/index.php" class="totales">
                                            <b class="h5"> <?php echo $num_equipos ?> </b><br>
                                            Jugadores registrados
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="card mb-3" style="background-color:#E8F6F3;">
                                    <div class="card-header text-muted h4">Canchas</div>
                                    <div class="card-body">
                                        <h2 class="card-title"></h2>
                                        <div class="p-3">
                                            <img style="width: 35%;" src="https://cdn-icons-png.flaticon.com/512/3461/3461128.png" class="img-fluid" alt="...">
                                        </div>

                                        <a href="Views/Administrador/inicio/index.php" class="totales">
                                            <b class="h5"> <?php echo $num_equipos ?> </b><br>
                                            Canchas registrados
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="card mb-3" style="background-color:#E8F6F3;">
                                    <div class="card-header text-muted h4">Grupos</div>
                                    <div class="card-body">
                                        <h2 class="card-title"></h2>
                                        <div class="p-3">
                                            <img style="width: 35%;" src="https://cdn-icons-png.flaticon.com/512/2842/2842558.png" class="img-fluid" alt="...">
                                        </div>

                                        <a href="Views/Administrador/inicio/index.php" class="totales">
                                            <b class="h5"> 4 </b><br>
                                            Grupos registrados
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