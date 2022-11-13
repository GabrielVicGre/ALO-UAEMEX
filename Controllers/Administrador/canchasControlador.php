<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Models/Administrador/canchasModelo.php");

class canchasControlador {
    private $model;
    
    function __construct() {
        $this->model = new canchasModelo();
    }

    function addCancha(){
        $nombre = $_POST['nombre'];
        $dir = $_POST['direccion'];
        $url = $_POST['url'];
        $this->model->agregaCancha($nombre,$dir,$url);
    }

    function listaCanchas(){
        $canchas = $this->model->recuperaCanchas();
        return $canchas;    
    }

    function deleteCancha($id_cancha){
        $this->model->eliminaCancha($id_cancha);
    }

    function getDatosCanchaById($id_cancha){
        $cancha = $this->model->recuperaDatosCanchabyId($id_cancha);
        return $cancha;
    }

    function editCancha(){
        $id_cancha = $_POST['id_cancha'];
        $nombre = $_POST['nombre'];
        $dir = $_POST['direccion'];
        $url = $_POST['url'];
        $this->model->updateCancha($id_cancha, $nombre, $dir, $url);
    }


}

?>
