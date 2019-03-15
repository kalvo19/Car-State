<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 8/03/19
 * Time: 19:10
 */

class bbdd {

    private $conexion = '';

    public function __construct() {

        $dsn = 'mysql:host=' . HOST_SERVIDOR_MYSQL . ';dbname=' . NOMBRE_BASE_DE_DATOS;

        $this->conexion = new PDO($dsn);

        if (!$this->conexion) {
            echo 'Debugging errno: ' . mysqli_errno();
            echo 'Debugging error: ' . mysqli_error();
        }
    }

    private function seleccionarDatos($consulta) {
        $statement = $this->conexion->prepare($consulta);
        $this->conexion->exec($statement);
        $resultadoConsulta = $statement->fetchAll();
        print_r($resultadoConsulta);
    }

}