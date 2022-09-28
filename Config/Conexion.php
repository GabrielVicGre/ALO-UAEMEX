<?php 
    /*
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "bd_sistematutoria";
    $conexion = mysqli_connect($server, $user, $pass);
    if (mysqli_connect_errno()) {
        echo "Fallo de conexion a la base de datos";
    }
    mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
    mysqli_set_charset($conexion, "UTF8"); 
    */
    $user = "Administrador@sbd-alo-fi";
    $pass = "3Fl760wnL8b@";
    $server = "sbd-alo-fi.mysql.database.azure.com";
    $db = "bd_alofi";
    $conexion = mysqli_connect($server, $user, $pass);
    if (mysqli_connect_errno()) {
        echo "Fallo de conexion a la base de datos";
    }
    mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
    mysqli_set_charset($conexion, "UTF8");
?>
