<?php
session_start();
$_SESSION['opcion'] = 'clasificaciones';

$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Controllers/Administrador/clasificacionesControlador.php");
$clasificaciones_Controller = new clasificacionesControlador();
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
                    <h4 class="h5">Clasificaciones</h4>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-success" style="width: 200px;">  <i class="bi bi-person-fill mx-1"></i>
                                Invitado
                            </button>
                        </div>
                    </div>
                </div>

                <?php include "contenido-layout.php"; ?>
               
            </main>
            
        </div>
    </div>


</body>

</html>