<?php

require '../Models/Usuario.php';
include('../Config/Conexion.php');

$user = $_POST['user'];
$password = $_POST['password'];

if(isset($_POST["Ingresar"])){
    session_start();
    $_SESSION['usuario'] = $user;
    $_SESSION['password'] = $password;
}

$sql = "SELECT * FROM usuario WHERE email like '".$user."' AND password like '".$password."'"; 
$data = mysqli_query($conexion, $sql); // Ejecuta Query

if($data->num_rows == 1){ // Si encuentra el registro entonces
    while ($fila = mysqli_fetch_array($data)) {
        $id = $fila["id_usuario"];
        $email = $fila["email"];
        $pass = $fila["password"];
        $tipoUsuario = $fila["id_tipo_usuario"];
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