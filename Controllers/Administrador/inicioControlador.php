<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
#include_once($ruta."/Models/Administrador/jugadoresModelo.php");
include_once($ruta."/Models/Administrador/equiposModelo.php");
include_once($ruta."/Models/Administrador/jugadoresModelo.php");
include_once($ruta."/Models/Administrador/canchasModelo.php");
include_once($ruta."/Models/Administrador/gruposModelo.php");

class inicioControlador {
    private $modelo_equipos;
    private $modelo_jugadores;
    private $modelo_canchas;
    private $modelo_grupos;

    function __construct() {
       # $this->model = new jugadoresModelo();
        $this->modelo_equipos = new equiposModelo();
        $this->modelo_jugadores = new jugadoresModelo();
        $this->modelo_canchas = new canchasModelo();
        $this->modelo_grupos = new gruposModelo();
    }

    function getTotalEquipos(){
        $numero_equipos = $this->modelo_equipos->RecuperaNumeroEquipos();
        return $numero_equipos;
    }

    function getTotalJugadores(){
        $numero_jugadores = $this->modelo_jugadores->RecuperaNumeroJugadores();
        return $numero_jugadores;
    }
   
    function getTotalCanchas(){
        $numero_canchas = $this->modelo_canchas->RecuperaNumeroCanchas();
        return $numero_canchas;
    } 
    
    function getTotalGrupos(){
        $numero_grupos = $this->modelo_grupos->RecuperaNumeroGrupos();
        return $numero_grupos;
    }

   
    



}
