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