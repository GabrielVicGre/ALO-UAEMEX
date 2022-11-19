<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Config/ConexionPOO.php");

class canchasModelo {

    public function agregaCancha($nombre,$dir,$url){
        global $conexion;
        $sql = "INSERT INTO canchas VALUES (NULL, '$nombre', '$dir', '$url') ";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function recuperaCanchas(){
        global $conexion;
        $sql = "SELECT * FROM canchas";
        $query = $conexion->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function eliminaCancha($id_cancha){
        global $conexion;
        $sql = "DELETE FROM canchas WHERE id_cancha=$id_cancha";
        $query = $conexion->prepare($sql);
        $query->execute();
    }


    public function recuperaDatosCanchabyId($id_cancha){
        global $conexion;
        $sql = "SELECT * FROM canchas WHERE id_cancha=$id_cancha";
        $query = $conexion->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results[0];
    }

    public function updateCancha($id_cancha, $nombre, $dir, $url)  {
        global $conexion;
        $sql = "UPDATE canchas".
        " SET nombre = '$nombre', direccion = '$dir', url = '$url' ".
        " WHERE id_cancha = $id_cancha";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function RecuperaNumeroCanchas(){
        global $conexion;
        $sql = "SELECT * FROM canchas";
        $query = $conexion->prepare($sql);
        $query->execute();
        $total = $query->rowCount();
        return $total;
    }

}

?>
