<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
#include_once($ruta."/Models/Administrador/jugadoresModelo.php");
include_once($ruta."/Models/Administrador/equiposModelo.php");

class inicioControlador {
    private $modelo_equipos;
    
    function __construct() {
       # $this->model = new jugadoresModelo();
        $this->modelo_equipos = new equiposModelo();
    }

    function getTotalEquipos(){
        $numero_equipos = $this->modelo_equipos->RecuperaNumeroEquipos();
        return $numero_equipos;
    }

   

   
    



}

?>
