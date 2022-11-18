<?php
$ruta =  $_SERVER['DOCUMENT_ROOT'];
include_once($ruta . "/Models/Administrador/equiposModelo.php");
include_once($ruta . "/Models/Administrador/partidoModelo.php");


class clasificacionesControlador
{
    private $modelo_equipo;
    private $modelo_partido;
    private $clasificacion = array();

    function __construct()
    {
        $this->modelo_equipo = new equiposModelo();
        $this->modelo_partido = new partidoModelo();
    }

    public function calculaClasificacion()
    {
        $equipos = $this->modelo_equipo->getEquipos();
        $partidos = $this->modelo_partido->getPartidos();

        foreach ($equipos as $equipo) {
            $pj = 0; // partidos jugados
            $pg = 0; // partidos ganados
            $pe = 0; // partidos empatados
            $pp = 0; // partidos perdidos

            $id_equi = $equipo->id_equipo;
            foreach ($partidos as $partido) {
                if ($partido->status == "jugado") {
                    $id_equi_local = $partido->id_eq_local;
                    $id_equi_vis = $partido->id_eq_visitante;
                    $goles_loc = $partido->goles_local;
                    $goles_vis = $partido->goles_visitante;
                    if ($id_equi_local == $id_equi ||  $id_equi_vis == $id_equi) {
                        $pj = $pj + 1;
                    }
                    if ($id_equi_local == $id_equi) {
                        if ($goles_loc > $goles_vis) {
                            $pg = $pg + 1;
                        }
                        if ($goles_vis > $goles_loc) {
                            $pp = $pp + 1;
                        }
                    }
                    if ($id_equi_vis == $id_equi) {
                        if ($goles_vis > $goles_loc) {
                            $pg = $pg + 1;
                        }
                        if ($goles_loc > $goles_vis) {
                            $pp = $pp + 1;
                        }
                    }
                    if ($id_equi_local == $id_equi || $id_equi_vis == $id_equi) {
                        if ($goles_loc == $goles_vis) {
                            $pe = $pe + 1;
                        }
                    }
                }
            }

            $clasifica = array(
                'id_equipo' =>  $equipo->id_equipo,
                'nombre' => $equipo->nombre,
                'pj' => $pj,
                'pg' => $pg,
                'pe' => $pe,
                'pp' => $pp,
                'puntos' => ($pg * 3) + ($pe * 1)
            );

            array_push($this->clasificacion, $clasifica);
        }

        $puntos  = array_column($this->clasificacion, 'puntos');
        array_multisort($puntos, SORT_DESC, $this->clasificacion);

        return $this->clasificacion;
    }
}
