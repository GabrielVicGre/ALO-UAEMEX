<?php
    $ruta =  $_SERVER['DOCUMENT_ROOT'];
    include_once($ruta . "/Controllers/Administrador/equiposControlador.php");
    include_once($ruta . "/Controllers/Administrador/jugadoresControlador.php");

    $equiController = new equiposControlador();
    $equipo = $equiController->getDatosEquipoById($_GET['id_equipo']);

    $jugController = new jugadoresControlador();
?>

<!DOCTYPE html>
<html>

<head>
    <?php include "../layouts/head-layout.php"; ?>
    <style>
        /*   .dataTables_length{
            text-align: left !important;
        }*/
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
                    <h4 class="h5">Integrantes de <?php echo $equipo->nombre ?> </h4>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-success" style="width: 200px;">  <i class="bi bi-person-fill mx-1"></i>
                                Invitado
                            </button>
                        </div>
                    </div>
                </div>

                <div class="pt-3 container" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%; border-radius: 5px;">
                    <div class="p-1 table-responsive"> 
                        <table id="tabla-jugadores" class="align-middle table table-bordered" style="width:100%; background-color: #ffff;">
                            <thead class="text-white" style="background-color: #16A085;">
                                <tr>
                                    <th class="text-center"> Nombre </th>
                                    <th class="text-center"> Edad </th>
                                    <th class="text-center"> ¿Es capitán? </th>
                                    <th class="text-center"> Correo</th>
                                    <th class="text-center"> Licenciatura </th>
                                    <!--<th class="text-center"> Opciones</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $jugadores = $jugController->getJugadoresByEquipoId($_GET['id_equipo']);
                                foreach ($jugadores as $reg) {
                                ?>
                                    <tr>
                                        <form>
                                            <td class="text-left">
                                                <img width="25px" style="border-radius: 20px;" src="https://cdn-icons-png.flaticon.com/512/2348/2348811.png" class="img-fluid mx-1" alt="...">
                                                <?php echo $reg->nombre ?>
                                            </td>
                                            <td class="text-center"><?php echo $reg->edad ?></td>
                                            <td class="text-center"><?php echo $reg->es_capitan ?></td>
                                            <td class="text-center"><?php echo $reg->correo ?></td>
                                            <td class="text-center"><?php echo $reg->licenciatura ?></td>
                                            <input type="hidden" name="id_licenciatura" value="<?php echo $reg->id_licenciatura ?>">
                                            <input type="hidden" name="id_equipo" value="<?php echo $reg->id_equipo ?>">
                                            <input type="hidden" name="id_jugador" value="<?php echo $reg->id_jugador ?>">
                                        </form>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-success" href="Views/Invitado/equipos/index.php">Regresar</a> <br><br>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>