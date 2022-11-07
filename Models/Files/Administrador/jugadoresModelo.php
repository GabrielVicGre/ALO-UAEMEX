<?php
require_once("../../../Config/ConexionPOO.php");

class jugadoresModelo{

    public function recuperaJugadoresPorId_Equipo($id_equipo){
        global $conexion;
        $sql = "SELECT jugadores.* , licenciaturas.nombre as licenciatura 
                FROM jugadores INNER JOIN licenciaturas ON 
                jugadores.id_licenciatura = licenciaturas.id_licenciatura 
                WHERE id_equipo=$id_equipo";
        $query = $conexion->prepare($sql);
        $query->execute();
        $jugadores = $query->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }

    public function createJugador($nombre,$edad,$es_capitan,$correo,$id_lic,$id_equi){
        //echo $nombre."-".$edad."-".$es_capitan."-".$correo."-".$id_lic."-".$id_equi;
        global $conexion;
        $sql = "INSERT INTO jugadores VALUES (NULL, '$nombre', $edad, '$es_capitan','$correo',$id_lic,$id_equi) ";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    function ObtenerLicenciaturas(){
        global $conexion;
        $sql = "SELECT * FROM licenciaturas";
        $query = $conexion->prepare($sql);
        $query->execute();
        $licenciaturas = $query->fetchAll(PDO::FETCH_OBJ);
        return $licenciaturas;
    }


  
}
