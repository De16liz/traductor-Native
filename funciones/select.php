<?php

include( "conexion.php");

class select extends conexion
{
    static function consultar_tablas ($tabla, $campo, $dato)
    {
    
        $conexion = self::conectar( );

        $sql = " SELECT *  ";
        $sql .=" FROM $tabla ";
        $sql .=" WHERE $campo = '$dato' ";
        echo $sql;
        $resultado = $conexion->query( $sql );
        
        return $resultado;

        $conexion->close(); //cierra la conexion
    }
   
}
