<?php

session_start();
if (empty($_SESSION['usuario'])) {
    header("Location: ../../index.php");
}

?>

<html>

<head>
    <title>ALO-FI - Facultad de Ingeniería UAEMEX</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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