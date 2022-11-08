<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Models/Administrador/jugadoresModelo.php");

class jugadoresControlador {
    private $model;
    
    function __construct() {
        $this->model = new jugadoresModelo();
    }

    function getJugadoresByEquipoId($id_equipo){
        $jugadores = $this->model->recuperaJugadoresPorId_Equipo($id_equipo);
        return $jugadores;
    }

    function getLicenciaturas(){
        $licenciaturas = $this->model->ObtenerLicenciaturas();
        return $licenciaturas;
    }

    function addJugador(){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $es_capitan = $_POST['es_capitan'];
        $correo = $_POST['correo'];
        $id_lic = $_POST['id_licenciatura'];
        $id_equi = $_POST['id_equipo'];
        $this->model->createJugador($nombre,$edad,$es_capitan,$correo,$id_lic,$id_equi);
       // header("Location: ../../../Views/Administrador/equipos/".$nombre);
    }

    function getDatosJugadorById($id_jugador){
        $registro = $this->model->getDatosJugador($id_jugador);
        return $registro;
    }


    function editJugador(){
        $id_j = $_POST['id_jugador'];
        $nom = $_POST['nombre'];
        $edad = $_POST['edad'];
        $es_cap = $_POST['es_capitan'];
        $correo = $_POST['correo'];
        $id_lic = $_POST['id_licenciatura'];
        $id_equi = $_POST['id_equipo'];
        $this->model->updateJugador($id_j,$nom,$edad,$es_cap,$correo,$id_lic,$id_equi);
    }
   
    
    function deleteJugador(){
        $id_jugador = $_GET['id_jugador'];
        $this->model->deleteJugador($id_jugador);
    } 

   

   

    



}

?>
