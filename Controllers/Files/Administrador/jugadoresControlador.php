<?php

require_once("../../../Models/Files/Administrador/jugadoresModelo.php");

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

    /*
    function deleteJugador(){
        $id_equipo = $_GET['id_equipo'];
        $this->model->deleteEquipo($id_equipo);
    }

    function editJugador(){
        $id_equipo = $_POST['id_equipo'];
        $nombre = $_POST['nombre'];
        $desc = $_POST['descripcion'];
        $fr = $_POST['fecha_registro'];
        $this->model->updateEquipo($id_equipo, $nombre, $desc, $fr);
    }
    */

    



}

?>
