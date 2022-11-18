<?php
session_start();
if (empty($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'Administrador') {
    header("Location: ../../../index.php");
} else {
    $_SESSION['opcion'] = 'calendario';
    $ruta =  $_SERVER['DOCUMENT_ROOT'];
    include_once($ruta . "/Controllers/Administrador/equiposControlador.php");
    $equiController = new equiposControlador();
    include_once($ruta . "/Controllers/Administrador/canchasControlador.php");
    $canchasController = new canchasControlador();
    include_once($ruta . "/Controllers/Administrador/partidosControlador.php");
    $partidoController = new partidosControlador();
}

?>

<!DOCTYPE html>
<html lang="es">

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
                    <h4 class="h5">Calendario</h4>
                    <?php include "../layouts/user-layout.php"; ?>
                </div>


                <?php
                if (isset($_POST['add'])) {
                    $partidoController->addPartido();
                }
                if (isset($_POST['update'])) {
                    $partidoController->editPartido();
                }
                if (isset($_GET['delete'])) {
                    $partidoController->deletePartido($_GET['id_partido']);
                }
                ?>


                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="m-1">
                                <?php
                                $action = isset($_GET['action']) ? $_GET['action'] : "new";
                                switch ($action) {
                                    case "new":
                                        include "forms/nuevo_partido.php";
                                        break;
                                    case "edit":
                                        include "forms/editar_partido.php";
                                        break;
                                    case "cancel":
                                    default:
                                        header("Location: ../../../Views/Administrador/calendario/index.php?action=new");
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="pt-3">
                                <div class="card border-0">
                                    <div class="card-header text-center fw-bold">
                                        <spam class="h6 text-muted">Partidos registradas</spam>

                                    </div>
                                    <div class="p-1 table-responsive">
                                        <table id="tabla-equipos" class="align-middle table table-striped table-bordered nowrap" style="width:100%">
                                            <thead class="text-white" style="background-color:#16A085;">
                                                <th class="text-center"> Encuentro </th>
                                                <th class="text-center"> No. Jornada </th>
                                                <th class="text-center"> Fecha</th>
                                                <th class="text-center"> Hora</th>
                                                <th class="text-center"> G. Local</th>
                                                <th class="text-center"> G. Visitante</th>
                                                <th class="text-center"> Cancha</th>
                                                <th class="text-center"> Status</th>
                                                <th class="text-center"> Descripción</th>
                                                <th class="text-center"> Opciones</th>
                                            </thead>

                                            <?php
                                            $partidos = $partidoController->listaPartidos();
                                            foreach ($partidos as $reg) {
                                            ?>
                                                <tr>
                                                    <form action="Views/Administrador/calendario/index.php" method="GET">
                                                        <td class="text-center">
                                                            <?php echo $reg->equipo_local ?> <b>VS</b> <?php echo $reg->equipo_visitante ?>
                                                        </td>
                                                        <td class="text-center"> <?php echo $reg->no_jornada ?> </td>
                                                        <td class="text-center"> <?php echo $reg->fecha ?> </td>
                                                        <td class="text-center"> <?php echo $reg->hora ?> </td>
                                                        <td class="text-center fw-bold">
                                                            <?php
                                                            if($reg->status == "por_jugar" && $reg->goles_local == 0 ){
                                                                echo '---';
                                                            }else{
                                                                echo $reg->goles_local;
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center fw-bold">
                                                            <?php
                                                            if ($reg->status == "por_jugar" && $reg->goles_visitante == 0) {
                                                                echo '---';
                                                            } else {
                                                                echo $reg->goles_visitante;
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-center"> <?php echo $reg->nombre_cancha ?> </td>
                                                        <td class="text-center"> 
                                                            <?php 
                                                            if($reg->status == "jugado"){
                                                                echo '<span class="badge text-bg-secondary">Jugado</span>';
                                                            }elseif($reg->status == "por_jugar"){
                                                                echo '<span class="badge text-bg-success">Por jugar</span>';
                                                            }else{
                                                                echo '---';  
                                                            }
                                                            ?> 
                                                        </td>
                                                        <td class="text-center"> <?php echo $reg->descripcion ?> </td>

                                                        <td class="text-center" width="10%">
                                                            <button class="btn btn-sm text-white" style="background-color:#CEA228" type="submit" name="action" value="edit">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button class="btn btn-sm text-white" style="background-color:#85929E" type="submit" name="delete" value="delete">
                                                                <i class='bi bi-x-circle'></i> </button>
                                                        </td>
                                                        <input type="hidden" name="id_partido" value="<?php echo $reg->id_partido ?>">
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