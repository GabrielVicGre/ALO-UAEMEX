<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Config/ConexionPOO.php");

class partidoModelo {

    public function agregaCancha($nombre,$dir,$url){
        global $conexion;
        $sql = "INSERT INTO canchas VALUES (NULL, '$nombre', '$dir', '$url') ";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function agregaPartido($id_loc, $id_vis, $no_j, $fecha, $hora, $goles_local, $goles_visitante,$id_cancha, $status, $descripcion){
        global $conexion;
        $sql = "INSERT INTO partidos VALUES (NULL, $id_loc, $id_vis, $no_j, '$fecha', '$hora', $goles_local, $goles_visitante, $id_cancha, '$status', '$descripcion') ";
        $query = $conexion->prepare($sql);
        $query->execute();                               
    }

    public function getPartidos(){
        global $conexion;
        $sql = "SELECT partidos.*, t1.nombre as equipo_local, 
        t2.nombre as equipo_visitante, canchas.nombre as nombre_cancha 
        FROM partidos 
        INNER JOIN equipos as t1 ON t1.id_equipo = partidos.id_eq_local 
        INNER JOIN equipos as t2 ON t2.id_equipo = partidos.id_eq_visitante 
        INNER JOIN canchas ON canchas.id_cancha = partidos.id_cancha;";
        $query = $conexion->prepare($sql);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    
    public function ObtenDatosPartidoPorId($id_partido){
        global $conexion;
        $sql = "SELECT * FROM partidos WHERE id_partido=$id_partido";
        $query = $conexion->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results[0];
    }

    public function editaPartido($id_partido,$id_loc,$id_vis, $no_j, $fecha, $hora,$goles_local,
                                 $goles_visitante,$id_cancha,$status,$descripcion){
        global $conexion;
        $sql = "UPDATE partidos".
        " SET id_eq_local='$id_loc', id_eq_visitante='$id_vis',no_jornada='$no_j',
          fecha='$fecha', hora='$hora', goles_local='$goles_local', goles_visitante='$goles_visitante',
          id_cancha='$id_cancha',status='$status',descripcion='$descripcion' "." WHERE id_partido = $id_partido";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function BorrarPartido($id_partido) {
        global $conexion;
        $sql = "DELETE FROM partidos WHERE id_partido=$id_partido";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

}
