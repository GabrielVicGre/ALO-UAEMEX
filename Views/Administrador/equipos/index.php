<?php
session_start();
if (empty($_SESSION['usuario'])) {
    header("Location: ../../index.php");
} else {
    $_SESSION['opcion'] = 'equipos';
    require_once("../../../Controllers/Files/Administrador/equiposController.php");
    $equiController = new equiposController();
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
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column ">
                        <li class="nav-item mx-1 mt-3">
                            <a class="nav-link text-white <?php echo ($_SESSION['opcion'] == 'inicio') ? 'selected' : '' ?>" aria-current="page" href="Views/Administrador/inicio/index.php">
                                <i class="bi bi-house-fill  mx-2"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-white <?php echo ($_SESSION['opcion'] == 'equipos') ? 'selected' : '' ?>" href="Views/Administrador/equipos/index.php">
                                <i class="bi bi-people-fill mx-2"></i>
                                Equipos
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-white <?php echo ($_SESSION['opcion'] == 'calendario') ? 'selected' : '' ?>" href="Views/Administrador/calendario/index.php">
                                <i class="bi bi-calendar2-week-fill mx-2"></i>
                                Calendario
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-white <?php echo ($_SESSION['opcion'] == 'clasificaciones') ? 'selected' : '' ?>" href="Views/Administrador/clasificaciones/index.php">
                                <i class="bi bi-bar-chart-line-fill mx-2"></i>
                                Clasificaciones
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-white <?php echo ($_SESSION['opcion'] == 'canchas') ? 'selected' : '' ?>" href="Views/Administrador/canchas/index.php">
                                <i class="bi bi-geo-alt-fill mx-2"></i>
                                Canchas
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 py-2 mt-4 mb-1 text-white text-uppercase">
                        <span>Información Adicional</span>
                        <a class="link-secondary text-white" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2 mx-1">
                        <li class="nav-item">
                            <a class="nav-link text-white <?php echo ($_SESSION['opcion'] == 'acercaDe') ? 'selected' : '' ?>" href="Views/Administrador/acercaDe/index.php">
                                <i class="bi bi-info-circle mx-2"></i>
                                Acerca de
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white <?php echo ($_SESSION['opcion'] == 'ayuda') ? 'selected' : '' ?>" href="Views/Administrador/ayuda/index.php">
                                <i class="bi bi-question-octagon mx-2"></i>
                                Ayuda
                            </a>
                        </li>
                    </ul>
                    <div class="d-grid pt-5 text-center">
                        <a href="Config/Salir.php" class="btnSalir">
                            <i class="bi bi-box-arrow-right icon-Salir"></i>
                        </a>
                    </div>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h4 class="h5">Equipos</h4>
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

                <!--<a class="btn btn-success" href="Views/Administrador/equipos/create.php">Nuevo</a>-->
                <?php
                if (isset($_POST['add'])) {
                    $equiController->addEquipo();
                }
                if (isset($_POST['update'])) {
                    $equiController->editEquipo();
                }
                if (isset($_GET['delete'])) {
                    $equiController->deleteEquipo();
                }
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="p-3 bg-light">
                                <?php
                                $action = isset($_GET['action']) ? $_GET['action'] : "new";
                                switch ($action) {
                                    case "new":
                                        include "forms/nuevo_equipo.php";
                                        break;
                                    case "edit":
                                        include "forms/editar_equipo.php";
                                        break;
                                    case "cancel":
                                    default:
                                        header("Location: ../../../Views/Administrador/equipos/index.php?action=new");
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="p-3 bg-light">
                                <h6 class="pb-4 text-center">Equipos Registradas</h6>
                                <table class="table table-bordered text-center table-responsive">
                                    <thead class="text-white" style="background-color:#16A085;">
                                        <th> Nombre </th>
                                        <th> Descripción </th>
                                        <th> Fecha registro </th>
                                        <th> Opciones</th>
                                    </thead>
                                    <?php
                                    $registros = $equiController->listaEquipos();

                                    foreach ($registros as $reg) {
                                    ?>
                                        <tr>
                                            <form action="Views/Administrador/equipos/index.php" method="GET">
                                                <td><?php echo $reg->nombre ?></td>
                                                <td><?php echo $reg->descripcion ?></td>
                                                <td><?php echo date_format(date_create($reg->fecha_registro), "d-m-Y"); ?></td>
                                                <td>
                                                    <button class="btn btn-sm text-white" style="background-color:#CEA228" type="submit" name="action" value="edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>

                                                    <button class="btn btn-sm text-white" style="background-color:#85929E" type="submit" name="delete" value="delete">
                                                        <i class='bi bi-x-circle'></i> </button>

                                                    <button class="btn btn-sm text-white" style="background-color:#138D75" type="submit" name="action" value="edit">
                                                        <i class="bi bi-people"></i> </button>

                                                </td>
                                                <input type="hidden" name="id_equipo" value="<?php echo $reg->id_equipo ?>">
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