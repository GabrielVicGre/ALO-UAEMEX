<?php
    session_start();
    if (empty($_SESSION['usuario'])) {
        header("Location: ../../../index.php");
    }else{        
        $_SESSION['opcion'] = 'acercaDe';
    }    
?>


<!DOCTYPE html>
<html>

<head>
    <?php include "../layouts/head-layout.php"; ?>
</head>

<body>
    <?php include "../layouts/header-layout.php"; ?>
</body>

</html>