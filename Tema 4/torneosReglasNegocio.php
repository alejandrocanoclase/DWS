<?php

require( 'torneosAccesoDatos.php' );

class TorneosReglasNegocio
 {
    private $_ID;
    private $nombre;
    private $fecha;

    function __construct()
 {
    }

    function init( $id, $nombre, $fecha)
 {
        $this->_ID = $id;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
    }

    function getID()
 {
        return $this->_ID;
    }

    function getName(){
      return $this->nombre;
    }

    function getDate(){
      return $this->fecha;
    }

    function obtener()
 {
        $torneosDAL = new TorneosAccesoDatos();
        $rs = $torneosDAL->obtener();
        //var_dump($rs);
        $listaTorneos =  array();

        foreach ( $rs as $torneo )
 {
            $oTorneosReglasNegocio = new TorneosReglasNegocio();
            $oTorneosReglasNegocio->Init( $torneo[ 'id'], $torneo['nombre' ],$torneo[ 'fecha'] );
            array_push( $listaTorneos, $oTorneosReglasNegocio );

        }

        //var_dump($listaTorneos);
        return $listaTorneos;

    }
}