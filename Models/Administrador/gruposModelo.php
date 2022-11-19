<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta."/Config/ConexionPOO.php");

class gruposModelo{

    public function recuperaGrupos(){
        global $conexion;
        $sql = "SELECT * FROM grupos";
        $query = $conexion->prepare($sql);
        $query->execute();
        $grupos = $query->fetchAll(PDO::FETCH_OBJ);
        return $grupos;
    }

    public function createGrupo($nombre,$arregloIDsEquipos){
        global $conexion;
        $sql = "INSERT INTO grupos VALUES (NULL, '$nombre') ";
        $query = $conexion->prepare($sql);
        $query->execute();
        
        $id_grupo = $conexion->lastInsertId();

        foreach ($arregloIDsEquipos as $id_equipo) {
            $sql = "INSERT INTO grupoequipo VALUES (NULL,$id_grupo,$id_equipo)";
            $query = $conexion->prepare($sql);
            $query->execute();
        }
    }

    public function recuperaEquiposPorIdGrupo($id_grupo){
        global $conexion;
        $sql = "SELECT equipos.* FROM equipos INNER JOIN grupoequipo ON 
                grupoequipo.id_equipo = equipos.id_equipo 
                WHERE id_grupo=$id_grupo";
        $query = $conexion->prepare($sql);
        $query->execute();
        $equipos = $query->fetchAll(PDO::FETCH_OBJ);
        return $equipos;
    }

    public function borraGrupo($id_grupo){
        global $conexion;
        $sql = "DELETE FROM grupoequipo WHERE id_grupo=$id_grupo";
        $query = $conexion->prepare($sql);
        $query->execute();
        $sql = "DELETE FROM grupos WHERE id_grupo=$id_grupo";
        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function recuperaGrupoEquipo(){
        global $conexion;
        $sql = "SELECT * FROM grupoequipo";
        $query = $conexion->prepare($sql);
        $query->execute();
        $grupoequipo = $query->fetchAll(PDO::FETCH_OBJ);
        return $grupoequipo;
    }

    public function RecuperaNumeroGrupos(){
        global $conexion;
        $sql = "SELECT * FROM grupos";
        $query = $conexion->prepare($sql);
        $query->execute();
        $total = $query->rowCount();
        return $total;
    }

  
}
