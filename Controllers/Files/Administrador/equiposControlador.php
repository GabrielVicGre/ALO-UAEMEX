<?php
require_once("../../../Models/Files/Administrador/equiposModelo.php");

class equiposControlador {
    private $model;
    
    function __construct() {
        $this->model = new equiposModelo();
    }

    function listaEquipos(){
        $registros = $this->model->getEquipos();
        return $registros;   
    }

    function addEquipo(){
        $nombre = $_POST['nombre'];
        $des = $_POST['descripcion'];
        $fr = $_POST['fecha_registro'];

        $this->model->createEquipo($nombre,$des,$fr);
        //header("Location: ../../../Views/Administrador/equipos/index.php");
    }

    function getDatosEquipoById($id_equipo){
        $registro = $this->model->getDatosEquipo($id_equipo);
        return $registro;
    }

    function deleteEquipo(){
        $id_equipo = $_GET['id_equipo'];
        $this->model->deleteEquipo($id_equipo);
    }

    function editEquipo(){
        $id_equipo = $_POST['id_equipo'];
        $nombre = $_POST['nombre'];
        $desc = $_POST['descripcion'];
        $fr = $_POST['fecha_registro'];
        $this->model->updateEquipo($id_equipo, $nombre, $desc, $fr);
    }




}

?>
