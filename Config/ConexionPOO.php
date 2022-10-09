<?php
//global $connection;

   
/*
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "bd_sistematutoria";

    $connection = new mysqli($host,$user,$pass,$db);

    if($connection->connect_errno) {
        echo "Fallo de conexion a la base de datos";
    }
*/


    $user = "Administrador@sbd-alo-fi";
    $password = "3Fl760wnL8b@";
    $server = "sbd-alo-fi.mysql.database.azure.com";
    $database = "bd_alofi";

    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => '../Assets/SSL/BaltimoreCyberTrustRoot.crt.pem'
    );
    $con = new PDO('mysql:host='.$server.';port=3306;dbname='.$database , $user, $password, $options);

  /*  $connection = mysqli_init();
    mysqli_ssl_set($connection,NULL,NULL, "../Assets/SSL/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);  
    $connection = new mysqli($server,$user,$pass,$db);

    if($connection->connect_errno) {
        echo "Fallo de conexion a la base de datos";
    }*/

   /* $conexion = mysqli_init();
   
    mysqli_real_connect($conexion, $server, $user, $pass, $db,3306, NULL, MYSQLI_CLIENT_SSL);
    if (mysqli_connect_errno()) {
        echo "Fallo de conexion a la base de datos";
    }*/

?>
