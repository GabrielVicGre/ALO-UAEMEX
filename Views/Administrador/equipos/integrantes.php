<?php
session_start();
if (empty($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'Administrador') {
    header("Location: ../../../index.php");
} else {
    $_SESSION['opcion'] = 'equipos';
    $ruta =  $_SERVER['DOCUMENT_ROOT'];
    include_once($ruta."/Controllers/Administrador/equiposControlador.php");
    include_once($ruta."/Controllers/Administrador/jugadoresControlador.php");

    $equiController = new equiposControlador();
    $equipo = $equiController->getDatosEquipoById($_GET['id_equipo']);

    $jugController = new jugadoresControlador();
}

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
                    <h4 class="h5">Integrantes de <?php echo $equipo->nombre ?> </h4>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                Share
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                Export
                            </button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            This week
                        </button>
                    </div>
                </div>

                <?php
                if (isset($_POST['add'])) {
                    $jugController->addJugador();
                }
               if (isset($_POST['update'])) {
                    $jugController->editJugador();
                }
                if (isset($_GET['delete'])) {
                    $jugController->deleteJugador();
                }
            
                ?>

                <div class="container">
                    <div class="pt-1 bg-light pb-2" style="border-radius: 15px;">
                        <?php
                        $action = isset($_GET['action']) ? $_GET['action'] : "new";
                        switch ($action) {
                            case "new":
                                include "forms/nuevo_jugador.php";
                                break;
                            case "edit":
                                include "forms/editar_jugador.php";
                                break;
                            case "cancel":
                            default:
                                header("Location: ../../../Views/Administrador/equipos/integrantes.php?action=new");
                        }
                        ?>
                    </div>
                </div>
                        <br>

                <div class="container text-center" style="width: 99%;">
                    <div class="table-responsive">
                        <table id="" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th> Nombre </th>
                                    <th> Edad </th>
                                    <th> ¿Es capitán? </th>
                                    <th> Correo</th>
                                    <th> Licenciatura </th>
                                    <th> Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $jugadores = $jugController->getJugadoresByEquipoId($_GET['id_equipo']);
                                foreach ($jugadores as $reg) {
                                ?>
                                    <tr>
                                        <form action="Views/Administrador/equipos/integrantes.php?id_equipo=<?php echo $_GET['id_equipo'] ?>" method="GET">
                                            <td><?php echo $reg->nombre ?></td>
                                            <td><?php echo $reg->edad ?></td>
                                            <td><?php echo $reg->es_capitan ?></td>
                                            <td><?php echo $reg->correo ?></td>
                                            <td><?php echo $reg->licenciatura ?></td>
                                            <td>
                                                <button class="btn btn-sm text-white" style="background-color:#CEA228" type="submit" name="action" value="edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>

                                                <button class="btn btn-sm text-white" style="background-color:#85929E" type="submit" name="delete" value="delete">
                                                    <i class='bi bi-x-circle'></i> </button>

                                                <a href="Views/Administrador/equipos/integrantes.php?id_equipo=<?php echo $reg->id_equipo ?>" class="btn btn-sm text-white" style="background-color:#138D75"> <i class="bi bi-people"></i> </a>
                                            </td>
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
                    <a class="btn btn-sm btn-success" href="Views/Administrador/equipos/index.php">Regresar</a>
                </div>

            </main>

        </div>
    </div>
    <script>
        if (window.history.replaceState) { // PARA NO ENVIAR EL FORMULARIO DOS VECES
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>