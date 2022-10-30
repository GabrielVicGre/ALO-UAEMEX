<header class="navbar sticky-top fondoHeader flex-md-nowrap p-0 shadow">
    <div class="container text-center d-inline-block align-content-center">
        <div class="row">
            <div class="col-2 fondoHeader">
                <img class="imgUaemex" src="Assets/Images/uaemex.png" width="130px" height="50px" />
            </div>
            <div class="col-8 mt-1 headerNombre">
                <span> Asistente de Ligas Oficiales - <b> FI </b></span>
            </div>
            <div class="col-2 fondoHeader">
                <img class="imgFI" src="Assets/Images/fi.png" width="130px" height="50px" />
            </div>
        </div>
        <div class="container d-none SmallHeader">
            <div class="row">
                <div class="col-11">
                    <img src="Assets/Images/fi.png" width="130px" height="50px" />
                </div>
                <div class="col-1">
                    <button class="navbar-toggler position-absolute d-md-none h-75 m-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column ">
                    <li class="nav-item mx-1 mt-3">
                        <a class="nav-link text-white" aria-current="page" href="Views/Invitado/inicio.php">
                            <i class="bi bi-house-fill  mx-2"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-white" href="Views/Invitado/equipos.php">
                            <i class="bi bi-people-fill mx-2"></i>
                            Equipos
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-white" href="Views/Invitado/calendario.php">
                            <i class="bi bi-calendar2-week-fill mx-2"></i>
                            Calendario
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-white" href="Views/Invitado/clasificaciones.php">
                            <i class="bi bi-bar-chart-line-fill mx-2"></i>
                            Clasificaciones
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-white selected" href="Views/Invitado/canchas.php">
                            <i class="bi bi-geo-alt-fill mx-2"></i>
                             Canchas
                        </a>
                    </li>
                </ul>

                <h6 style="background-color: #155037;" class="sidebar-heading d-flex justify-content-between align-items-center px-3 py-2 mt-4 mb-1 text-white text-uppercase">
                    <span>Información Adicional</span>
                    <a class="link-secondary text-white" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2 mx-1">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Views/Invitado/acercaDe.php">
                            <i class="bi bi-info-circle mx-2"></i>
                            Acerca de
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Views/Invitado/ayuda.php">
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

            <?php include "contenido-layout.php"; ?>

        </main>

    </div>
</div>