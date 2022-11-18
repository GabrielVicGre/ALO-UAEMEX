<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Models/Administrador/partidoModelo.php");

class partidosControlador {
    private $model;
    
    function __construct() {
        $this->model = new partidoModelo();
    }

    function addPartido(){
        $id_loc = $_POST['id_eq_local'];
        $id_vis = $_POST['id_eq_visitante'];
        $no_j = $_POST['no_jornada'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $goles_local = $_POST['goles_local'];
        $goles_visitante = $_POST['goles_visitante'];
        $id_cancha = $_POST['id_cancha'];
        $status = $_POST['status'];
        $descripcion = $_POST['descripcion'];
        $this->model->agregaPartido( $id_loc,$id_vis, $no_j, $fecha, $hora, 
                                    $goles_local, $goles_visitante,$id_cancha,$status,$descripcion);
    }

    function listaPartidos(){
        $partidos = $this->model->getPartidos();
        return $partidos;
    }

    function getDatosPartidoById($id_partido){
        $partido = $this->model->ObtenDatosPartidoPorId($id_partido);
        return $partido; 
    }

    function editPartido(){
        $id_partido = $_POST['id_partido'];
        $id_loc = $_POST['id_eq_local'];
        $id_vis = $_POST['id_eq_visitante'];
        $no_j = $_POST['no_jornada'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $goles_local = $_POST['goles_local'];
        $goles_visitante = $_POST['goles_visitante'];
        $id_cancha = $_POST['id_cancha'];
        $status = $_POST['status'];
        $descripcion = $_POST['descripcion'];
        $this->model->editaPartido($id_partido,$id_loc,$id_vis, $no_j, $fecha, $hora, 
                                    $goles_local, $goles_visitante,$id_cancha,$status,
                                    $descripcion);
    }

    function deletePartido($id_partido){
        $this->model->BorrarPartido($id_partido);
    }
    


}

?>
