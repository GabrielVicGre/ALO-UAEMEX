<?php
session_start();
if (empty($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'Administrador') {
    header("Location: ../../../index.php");
} else {
    $_SESSION['opcion'] = 'canchas';
    $ruta =  $_SERVER['DOCUMENT_ROOT'];
    include_once($ruta . "/Controllers/Administrador/canchasControlador.php");
    $canchasController = new canchasControlador();
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
                    <h4 class="h5">Canchas</h4>
                    <?php include "../layouts/user-layout.php"; ?>

                </div>


                <?php
                if (isset($_POST['add'])) {
                    $canchasController->addCancha();
                }
                if (isset($_POST['update'])) {
                    $canchasController->editCancha();
                }
                if (isset($_GET['delete'])) {
                    $canchasController->deleteCancha($_GET['id_cancha']);
                }
                ?>


                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="p-3">
                                <?php
                                $action = isset($_GET['action']) ? $_GET['action'] : "new";
                                switch ($action) {
                                    case "new":
                                        include "forms/nueva_cancha.php";
                                        break;
                                    case "edit":
                                        include "forms/editar_cancha.php";
                                        break;
                                    case "cancel":
                                    default:
                                        header("Location: ../../../Views/Administrador/canchas/index.php?action=new");
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="pt-3">
                                <div class="card border-0">
                                    <div class="card-header text-center fw-bold">
                                        <spam class="h6 text-muted">Canchas registradas</spam>

                                    </div>
                                    <div class="p-1 table-responsive">
                                        <table id="tabla-equipos" class="align-middle table table-striped table-bordered nowrap" style="width:100%">
                                            <thead class="text-white" style="background-color:#16A085;">
                                                <th class="text-center"> Nombre </th>
                                                <th class="text-center"> Dirección </th>
                                                <th class="text-center"> Mapa</th>
                                                <th class="text-center"> Opciones</th>
                                            </thead>
                                            <?php
                                            $canchas = $canchasController->listaCanchas();
                                            foreach ($canchas as $reg) {
                                            ?>
                                                <tr>
                                                    <form action="Views/Administrador/canchas/index.php" method="GET">
                                                        <td class="text-left">
                                                            <img width="25px" style="border-radius: 2px;" src="https://cdn-icons-png.flaticon.com/512/3461/3461128.png" class="img-fluid mx-1" alt="...">
                                                            <?php echo $reg->nombre ?>
                                                        </td>
                                                        <td class="text-center" width="45%"><?php echo $reg->direccion ?></td>
                                                        <td class="text-center">
                                                            <a href="<?php echo $reg->url ?>" target="_blank">
                                                                <img width="25px" style="border-radius: 20px;" src="https://cdn-icons-png.flaticon.com/512/854/854901.png" class="img-fluid mx-1" alt="...">
                                                            </a>
                                                        </td>
                                                        <td class="text-center" width="15%">
                                                            <button class="btn btn-sm text-white" style="background-color:#CEA228" type="submit" name="action" value="edit">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button class="btn btn-sm text-white" style="background-color:#85929E" type="submit" name="delete" value="delete">
                                                                <i class='bi bi-x-circle'></i> </button>
                                                        </td>
                                                        <input type="hidden" name="id_cancha" value="<?php echo $reg->id_cancha ?>">
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