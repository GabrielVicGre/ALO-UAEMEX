<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Models/Administrador/equiposModelo.php");
include_once($ruta."/Models/Administrador/partidoModelo.php");

class clasificacionesControlador {
    private $modelo_equipo;
    private $modelo_partido;
    private $clasificacion=array();

    function __construct() {
        $this->modelo_equipo = new equiposModelo();
        $this->modelo_partido= new partidoModelo();
    }

    public function calculaClasificacion(){
        $equipos = $this->modelo_equipo->getEquipos();
        foreach($equipos as $equipo){
            array_push($this->clasificacion, $equipo);
        }
        return $this->clasificacion;
    }
  



}

?>
