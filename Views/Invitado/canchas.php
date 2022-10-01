<?php

?>
<html>
<head>
    <title>ALO-FI - Facultad de Ingeniería UAEMEX</title>
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
        <?php include "nav.php"; ?>
    </header>
    <main>
        <h1 class="tituloOpciones" >Canchas Oficiales</h1>
        <div class="containerImg">
            <img class="imagenTest" src="../../Assets/Images/canchas.png" alt="">

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