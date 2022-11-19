<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Config/ConexionPOO.php");

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

    public function ObtenerLicenciaturas(){
        global $conexion;
        $sql = "SELECT * FROM licenciaturas";
        $query = $conexion->prepare($sql);
        $query->execute();
        $licenciaturas = $query->fetchAll(PDO::FETCH_OBJ);
        return $licenciaturas;
    }


    public function getDatosJugador($id_jugador){
        global $conexion;
        $sql = "SELECT * FROM jugadores WHERE id_jugador=$id_jugador";
        $query = $conexion->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results[0];
    }

    public function updateJugador($id_j,$nom,$edad,$es_cap,$correo,$id_lic,$id_equi){
        global $conexion;
        $sql = "UPDATE jugadores".
        " SET nombre='$nom',edad='$edad',es_capitan='$es_cap',correo='$correo',
        id_licenciatura='$id_lic',id_equipo='$id_equi' ".
        "WHERE id_jugador = $id_j";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function deleteJugador($id_jugador){
        global $conexion;
        $sql = "DELETE FROM jugadores WHERE id_jugador=$id_jugador";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function RecuperaNumeroJugadores(){
        global $conexion;
        $sql = "SELECT * FROM jugadores";
        $query = $conexion->prepare($sql);
        $query->execute();
        $total = $query->rowCount();
        return $total;
    }


  
}
