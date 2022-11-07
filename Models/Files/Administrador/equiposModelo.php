<?php
require_once("../../../Config/ConexionPOO.php");

class equiposModelo{

    public function getEquipos(){
        global $conexion;
        $sql = "SELECT * FROM equipos";
        $query = $conexion->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function createEquipo($nombre,$des,$fr){
        global $conexion;
        $sql = "INSERT INTO equipos VALUES (NULL, '$nombre', '$des', '$fr') ";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function deleteEquipo($id_equipo){
        global $conexion;
        $sql = "DELETE FROM equipos WHERE id_equipo=$id_equipo";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function getDatosEquipo($id_equipo){
        global $conexion;
        $sql = "SELECT * FROM equipos WHERE id_equipo=$id_equipo";
        $query = $conexion->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results[0];
    }

    public function updateEquipo($id_equipo, $nombre, $desc, $fr){
        global $conexion;
        $sql = "UPDATE equipos".
        " SET nombre = '$nombre', descripcion = '$desc', fecha_registro = '$fr' ".
        " WHERE id_equipo = $id_equipo";
        $query = $conexion->prepare($sql);
        $query->execute();
    }



}

?>
