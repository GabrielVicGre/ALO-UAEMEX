<?php

require '../Models/Usuario.php';
include('../Config/ConexionPOO.php');

$user = $_POST['user'];
$password = $_POST['password'];

if (isset($_POST["Ingresar"])) {
    session_start();
    $_SESSION['usuario'] = $user;
    $_SESSION['password'] = $password;
}

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
    header("Location: ../Views/Administrador/inicio.php");
} else {  // No encuentra el registro
     header("Location: ../index.php?e");     
}
