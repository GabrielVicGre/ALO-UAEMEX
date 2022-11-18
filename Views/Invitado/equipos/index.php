<?php
session_start();
$_SESSION['opcion'] = 'equipos';

$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta . "/Controllers/Administrador/equiposControlador.php");
$equiController = new equiposControlador();
?>

<!DOCTYPE html>
<html>

<head>
    <?php include "../layouts/head-layout.php"; ?>
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
                    <h4 class="h5">Equipos</h4>
                    <?php include "../layouts/user-layout.php"; ?>
                </div>
                
                <!--style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%; color: #fff; border-radius: 10px; font-size: 20px;"-->
                <div class="container py-4" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%; border-radius: 5px;">
                <div class="col-12 col-lg-10" style="margin: auto;">
                    <div class="card border-0">
                        <div class="card-header text-center fw-bold" style="background-color:#16A085; margin: auto; color: #fff; width: 100%;">
                            <spam class="h6" style="font-size: 20px;">Equipos Registrados</spam>
                        </div>
                        <div class="p-2 table-responsive">
                            <table id="tabla-equipos" class="table table-bordered" style="width:100%; background-color:  #ffff;">
                                <thead class="text-white" style="background-color:#16A085;">
                                    <th class="text-center p-3"> Nombre </th>
                                    <th class="text-center p-3"> Descripción </th>
                                    <th class="text-center p-3"> Fecha registro </th>
                                    <th class="text-center p-3"> Jugadores </th>
                                </thead>
                                <?php
                                $registros = $equiController->listaEquipos();

                                foreach ($registros as $reg) {
                                ?>
                                    <tr>
                                        <form action="Views/Administrador/equipos/index.php" method="GET">
                                            <td class="text-left pt-3">
                                                <img width="25px" style="border-radius: 20px;" src="https://cdn-icons-png.flaticon.com/512/8556/8556998.png" class="img-fluid mx-1" alt="...">
                                                <?php echo $reg->nombre ?>
                                            </td>
                                            <td class="text-left pt-3"><?php echo $reg->descripcion ?></td>
                                            <td class="text-center pt-3"><?php echo date_format(date_create($reg->fecha_registro), "d-m-Y"); ?></td>
                                            <input type="hidden" name="id_equipo" value="<?php echo $reg->id_equipo ?>">
                                            <td class="text-center pt-2"> <a href="Views/Invitado/equipos/integrantes.php?id_equipo=<?php echo $reg->id_equipo ?>" class="btn btn-sm text-white" style="background-color:#138D75"> <i class="bi bi-people"></i> </a> </td>
                                        </form>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>

</html>