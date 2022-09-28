<?php

session_start();
if(empty($_SESSION['usuario'])){
    header("Location: ../../index.php");
}

?>

<html>
<head>
    <title>SistActTut - Facultad de Ingeniería UAEMEX</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="">
    <link rel="stylesheet" href="/../../Assets/Icons/fontawesome-6.2.0/css/all.css">
    <link rel="stylesheet" href="/../../Assets/CSS/index.css">
    <link rel="stylesheet" href="/../../Assets/CSS/top-nav.css">
    <script src="/../../Assets/Scripts/top-nav.js"></script>
</head>

<body>
    <header>
        <!-- <h1> Bienvenido <?php echo $_SESSION['usuario'] ?> </h1>  -->
        <?php include "layouts/nav.php"; ?>
    </header>
    <main>

    </main>
</body>
<script>
    document.getElementById("cargar-info").addEventListener("mouseover", displayCargarInfo);
    document.getElementById("cargar-info").addEventListener("mouseout", hideCargarInfo);
    document.getElementById("cargar-plan").addEventListener("mouseover", displayPlanTrabajo);
    document.getElementById("cargar-plan").addEventListener("mouseout", hidePlanTrabajo);
</script>

</html>