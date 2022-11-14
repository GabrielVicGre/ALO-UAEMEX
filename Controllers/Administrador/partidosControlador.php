<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Models/Administrador/partidoModelo.php");

class partidosControlador {
    private $model;
    
    function __construct() {
        $this->model = new partidoModelo();
    }

    


}

?>
