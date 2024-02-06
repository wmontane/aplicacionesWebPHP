<?php

class Conectar {
public static function conexion()
    {
        $conexion= new mysqli("186.3.139.231","userJP","J4p0n2024","db_appweb");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
