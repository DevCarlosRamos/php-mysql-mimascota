<?php
require_once '../conexion.php';

class Modelo_post extends conexion
{
    public function Registrar_post($titulo, $descripcion, $lugar, $imguno)
    {
        $con = conexion::conexionPDO();
        $sql = " INSERT INTO post  ( `titulo`, `descripcion`, `lugar`, `imguno`, `imgdos` , `imgtres` , `imgcuatro`,`fecha`) VALUES ( '$titulo', '$descripcion' , '$lugar' , '$imguno', '','','','2022-05-04 00:00:00');";
        $resultado = conexion::ejecutar($sql);
        return 1;
        conexion::cerrar_conexion();
    }
}
