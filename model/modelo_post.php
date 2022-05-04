<?php
require_once '../modelo_conexion.php';

class Modelo_post extends conexion
{


    public function Registrar_post($titulo, $descripcion, $lugar, $imguno)
    {
        $con = conexion::conexionPDO();
        $sql = " ";
        $query = $con->prepare($sql);
        $query->bindParam(1, $titulo);
        $query->bindParam(2, $descripcion);
        $query->bindParam(3, $lugar);
        $query->bindParam(4, $imguno);


        $resultado = $query->execute();
        //Se utiliza cuando no retornas un valor en el procedure
        if ($resultado) {
            return 1;
        } else {
            return 0;
        }
        conexion::cerrar_conexion();
    }
}
