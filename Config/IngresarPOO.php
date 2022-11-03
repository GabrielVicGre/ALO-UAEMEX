<?php

require_once('ConexionPOO.php');
global $conexion;

if (strlen($_POST['user'])>0 && strlen($_POST['password'])>0 ) {

    $user = $_POST['user'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM administradores WHERE user like '" . $user . "' AND password like '" . $password . "'";
    $query = $conexion->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    if ($query->rowCount() == 1) {
    /* foreach ($results as $registro) {
            $id = $registro->id_administrador;
            $user = $registro->user;
            $pass = $registro->password;
        }*/
        if (isset($_POST["Ingresar"])) {
            session_start();
            $_SESSION['usuario'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['tipo_usuario'] = 'Administrador';
        }
        header("Location: ../Views/Administrador/inicio/index.php");
    } else {  // No encuentra el registro
        header("Location: ../index.php?e");     
    }
}else{
    header("Location: ../index.php?i");     
}