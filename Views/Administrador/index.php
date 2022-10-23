<?php

session_start();
if (empty($_SESSION['usuario'])) {
    header("Location: ../../index.php");
}

?>

<html>

<head>
    <?php include "layouts/head-layout.php"; ?>
</head>

<body>
    <header>
        <!-- <h1> Bienvenido <?php echo $_SESSION['usuario'] ?> </h1>  -->
        <?php include "layouts/nav-layout.php"; ?>
    </header>
    <main>
        <h1 class="tituloOpciones">Inicio</h1>


        <div class="containerImg">
            <img class="imagenhome" src="../../Assets/Images/home2.png" alt="">
        </div>

    </main>
</body>
<script>
    document.getElementById("cargar-info").addEventListener("mouseover", displayCargarInfo);
    document.getElementById("cargar-info").addEventListener("mouseout", hideCargarInfo);
    document.getElementById("cargar-plan").addEventListener("mouseover", displayPlanTrabajo);
    document.getElementById("cargar-plan").addEventListener("mouseout", hidePlanTrabajo);
</script>

</html>