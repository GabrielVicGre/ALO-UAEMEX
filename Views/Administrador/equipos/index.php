<?php
session_start();
if (empty($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'Administrador') {
    header("Location: ../../../index.php");
} else {
    $_SESSION['opcion'] = 'equipos';
    $ruta =  $_SERVER['DOCUMENT_ROOT'];
    include_once($ruta . "/Controllers/Administrador/equiposControlador.php");
    $equiController = new equiposControlador();
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
                    <h4 class="h5">Equipos</h4>
                    <?php include "../layouts/user-layout.php"; ?>
                </div>

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
                        <div class="col-12 col-lg-4">
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
                        <div class="col-12 col-lg-8">
                            <div class="p-2 bg-light">
                                <h6 class="pb-4 pt-2 text-center">Equipos Registradas</h6>
                                <div class="p-1 table-responsive">
                                    <table id="tabla-equipos" class="align-middle table table-striped table-bordered nowrap" style="width:100%">
                                        <thead class="text-white" style="background-color:#16A085;">
                                            <th class="text-center"> Nombre </th>
                                            <th class="text-center"> Descripción </th>
                                            <th class="text-center"> Fecha registro </th>
                                            <th class="text-center"> Opciones</th>
                                        </thead>
                                        <?php
                                        $registros = $equiController->listaEquipos();

                                        foreach ($registros as $reg) {
                                        ?>
                                            <tr>
                                                <form action="Views/Administrador/equipos/index.php" method="GET">
                                                    <td class="text-left">
                                                        <img width="25px" style="border-radius: 20px;" src="https://cdn-icons-png.flaticon.com/512/8556/8556998.png" class="img-fluid mx-1" alt="...">
                                                        <?php echo $reg->nombre ?>
                                                    </td>
                                                    <td><?php echo $reg->descripcion ?></td>
                                                    <td><?php echo date_format(date_create($reg->fecha_registro), "d-m-Y"); ?></td>
                                                    <td>
                                                        <button class="btn btn-sm text-white" style="background-color:#CEA228" type="submit" name="action" value="edit">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>

                                                        <button class="btn btn-sm text-white" style="background-color:#85929E" type="submit" name="delete" value="delete">
                                                            <i class='bi bi-x-circle'></i> </button>

                                                        <a href="Views/Administrador/equipos/integrantes.php?id_equipo=<?php echo $reg->id_equipo ?>" class="btn btn-sm text-white" style="background-color:#138D75"> <i class="bi bi-people"></i> </a>

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
                </div>
                
            </main>

        </div>
    </div>

    <script>
        if (window.history.replaceState) { // PARA NO ENVIAR EL FORMULARIO DOS VECES
            window.history.replaceState(null, null, window.location.href);
        }
        /*
        $(document).ready(function() {
            $('#tabla-equipos').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                "lengthMenu": [[5, 10, 15, -1], [5, 10, 15,"Todos"]],
               
            });
        });*/
    </script>


</body>

</html>