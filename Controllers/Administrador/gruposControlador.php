<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Models/Administrador/gruposModelo.php");

class gruposControlador {
    private $model;
    
    function __construct() {
        $this->model = new gruposModelo();
    }

    function getGrupos(){
        return $this->model->recuperaGrupos();
    }

    function getGrupoEquipo(){
        $grupoEquipo = $this->model->recuperaGrupoEquipo();
        return $grupoEquipo;
    }

    function addGrupo(){
        $nombre = $_POST['nombre'];
        $arregloIDsEquipos = $_POST['equipos'];
        $this->model->createGrupo($nombre,$arregloIDsEquipos);
    }

    function getEquiposbyIdGrupo($id_grupo){
        $equipos = $this->model->recuperaEquiposPorIdGrupo($id_grupo);
        return $equipos;
    }

    function deleteGrupo($id_grupo){
        $this->model->borraGrupo($id_grupo);
    }


    
  

}

?>
