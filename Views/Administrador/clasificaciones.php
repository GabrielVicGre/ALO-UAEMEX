<?php
    session_start();
    if (empty($_SESSION['usuario'])) {
        header("Location: ../../index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "layouts/head-layout.php"; ?>
    </head>
    <body>
        <?php include "layouts/clasificaciones/header-layout.php"; ?>
    </body>
</html>