<?php

    $user = "Administrador@sbd-alo-fi";
    $password = "3Fl760wnL8b@";
    $server = "sbd-alo-fi.mysql.database.azure.com";
    $database = "bd_alofi";

    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => '../Assets/SSL/BaltimoreCyberTrustRoot.crt.pem'
    );
    $conexion = new PDO('mysql:host='.$server.';port=3306;dbname='.$database , $user, $password, $options);

?>
