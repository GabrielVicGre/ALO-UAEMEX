<?php

session_start();
$_SESSION['opcion'] = 'grupos';

$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta . "/Controllers/Administrador/gruposControlador.php");
$grupoController = new gruposControlador();
include_once($ruta . "/Controllers/Administrador/equiposControlador.php");
$equiController = new equiposControlador();

?>


<!DOCTYPE html>
<html>

<head>
    <?php include "../layouts/head-layout.php"; ?>
    <style>
        .cards {
            display: inline-block !important;
            width: 48%;
            margin: 4px 4px !important;
        }

        @media (max-width: 600px) {
            .cards {
                display: inline-block !important;
                width: 99%;
            }
        }
    </style>
</head>

<body>
    <?php include "../layouts/header-layout.php"; ?>

    <div class="container-fluid">
        <div class="row">

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <?php include "../layouts/menu-layout.php"; ?>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h4 class="h5">Grupos</h4>
                    <?php include "../layouts/user-layout.php"; ?>
                </div>

                <div class="container mb-4 p-4" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%;">
                    <div class="row">
                        <div class="col-12 col-lg-8" style="margin: auto;">
                            <div class="container">
                                <?php
                                $grupos =  $grupoController->getGrupos();
                                foreach ($grupos as $grupo) {
                                ?>
                                    <div class="card cards">
                                        <div class="card-header text-center fw-bold text-white" style="background-color:#45B39D;">
                                            <spam><?php echo $grupo->nombre ?></spam>
                                        </div>
                                        <div class="card-body">
                                            <form action="Views/Administrador/grupos/index.php" method="GET">
                                                <input type="hidden" name="id_grupo" value="<?php echo $grupo->id_grupo ?>">
                                                <?php
                                                $equipos = $grupoController->getEquiposbyIdGrupo($grupo->id_grupo);
                                                foreach ($equipos as $equipo) {
                                                ?>
                                                    <h6 class="text-left">
                                                        <img width="25px" style="border-radius: 20px;" src="https://cdn-icons-png.flaticon.com/512/8556/8556998.png" class="img-fluid mx-1" alt="...">
                                                        <?php echo $equipo->nombre ?>
                                                    </h6>
                                                <?php
                                                }
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

            </main>
        </div>
    </div>



</body>

</html>