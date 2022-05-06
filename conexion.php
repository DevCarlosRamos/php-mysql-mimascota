
<?php

class conexion
{
    private $host = 'database-1.c2qhrwyurthp.sa-east-1.rds.amazonaws.com';
    private $dbname = 'mimascotabd';
    private $usuario = 'root';
    private $password = '3ZrOf1#X9mFh';

    private  $pdo;

    public function conexionPDO()
    {

        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->usuario, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //$this->pdo->exec("set name utf8");
            //return $pdo;
            //echo "Conexión Lista";
            return $this->pdo;
        } catch (PDOException $e) {
            echo "Falló la conexión" . $e;
        }
    }

    public function ejecutar($sql) //inserta/delete/actualizar
    {
        $this->pdo->exec($sql);

        //return $this->pdo->lastInsertId();
    }
    public function consultar($sql)
    {
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    function cerrar_conexion()
    {
        $this->pdo = null;
    }
}

?>