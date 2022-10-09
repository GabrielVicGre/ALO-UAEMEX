<?php

require '../Models/Usuario.php';
include('../Config/ConexionPOO.php');

$user = $_POST['user'];
$password = $_POST['password'];

global $con;


if (isset($_POST["Ingresar"])) {
    session_start();
    $_SESSION['usuario'] = $user;
    $_SESSION['password'] = $password;
}


$sql = "SELECT * FROM usuario WHERE email like '" . $user . "' AND password like '" . $password . "'";
$query = $con->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if ($query->rowCount() == 1) {
    foreach ($results as $registro) {
        $id = $registro->id_usuario;
        $email = $registro->email;
        $pass = $registro->password;
        $tipoUsuario = $registro->id_tipo_usuario;
    }

    switch ($tipoUsuario) {
        case 1:
            header("Location: ../Views/Administrador/index.php");
            break;
        case 2:
            echo "Eres tutor";
            break;
        case 3:
            echo "Eres alumno";
            break;
    }
    
}else{  // No encuentra el registro
    echo "No se encontro registro";
}



?>